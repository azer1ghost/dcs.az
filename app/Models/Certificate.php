<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Milon\Barcode\DNS2D;
use setasign\Fpdi\PdfParser\CrossReference\CrossReferenceException;
use setasign\Fpdi\PdfParser\Filter\FilterException;
use setasign\Fpdi\PdfParser\PdfParserException;
use setasign\Fpdi\PdfParser\Type\PdfTypeException;
use setasign\Fpdi\PdfReader\PdfReaderException;
use Str;

/**
 * @method static expiredIn(int $int)
 */
class Certificate extends Model
{
    protected $connection = "mysql";

    protected $guarded = ['id'];

    protected $dates = ['started_at', 'expired_at'];

    protected $with = ['training:id,group_id'];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class);
    }

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    public function getIsExpiredAttribute(): bool
    {
        return $this->expired_at < now();
    }

    public function getIsExpiredInWeekAttribute(): bool
    {
        return $this->getAttribute('expired_at') < now()->addWeek();
    }

    public function scopeExpiredIn($query, $days = 7)
    {
        return $query->whereDate('expired_at', '<', now()->addDays($days));
    }

    public function getQrcodeAttribute(): string
    {
        $slug = route('certificate',  $this->getAttribute('slug'));

        $image = (new DNS2D())->getBarcodePNGPath($slug,'QRCODE','100','100', [26,54,56]);

        $image = public_path(str_replace('\\', '/', $image));

        return $image;
    }

    public function getSerialNumberAttribute(): string
    {
        return $this->training->getAttribute('cert_prefix') . str_pad($this->getAttribute('reg_number'), 5, "0", STR_PAD_LEFT);
    }

    /**
     * @throws CrossReferenceException
     * @throws PdfReaderException
     * @throws PdfParserException
     * @throws FilterException
     * @throws PdfTypeException
     */
    public function getPDF()
    {
        return (new \App\Certificates\Main\Certificate([
            'student' => $this->getAttribute('student'),
            'company' => $this->getAttribute('company'),
            'title' => $this->getAttribute('title'),
            'qrcode' => $this->getAttribute('qrcode'),
            'date' => $this->getAttribute('started_at')->format('d-m-Y'),
            'duration' => trans_choice('auth.days', $this->duration, ['days' => $this->duration]),
            'teacher' => $this->getAttribute('teacher'),
            'serial_number' => $this->getAttribute('serial_number'),
            'expiredAt' => optional($this->getAttribute('expired_at'))->format('d-m-Y'),
        ]))
        ->export();
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($certificate) {

            $certificate->setAttribute('slug', Str::slug(Str::random('25')));

            $last_regnumber = (new self)->newQuery()
                ->select('reg_number')
                ->where('training_id', $certificate->getAttribute('training_id'))
                ->latest('id')
                ->value('reg_number');

            $last_regnumber++;

            $certificate->setAttribute('reg_number', $last_regnumber);
        });

        static::saved(function (Certificate $model) {
            Counter::query()
                ->where('key', Counter::CERTIFICATE)
                ->update([
                    'value' => $model::query()->count()
                ]);
        });
    }
}
