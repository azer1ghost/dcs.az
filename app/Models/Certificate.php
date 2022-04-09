<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Milon\Barcode\DNS2D;
use Str;

class Certificate extends Model
{
    protected $guarded = ['id'];

    protected $dates = ['start_at', 'end_at', 'expired_at'];

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

    public function getQrcodeAttribute()
    {
        $slug = route('certificate',  $this->getAttribute('slug'));

        $image = (new DNS2D())->getBarcodePNGPath($slug,'QRCODE','100','100', [26,54,56]);

        $image = public_path(str_replace('\\', '/', $image));

        return $image;
    }

    public function getDurationAttribute(): string
    {
        $duration = $this->getAttribute('start_at')->diff($this->getAttribute('end_at'))->d > 0 ?? 1;

        return $duration . ' day';
    }

    public function getSerialNumberAttribute(): string
    {
        return $this->training->getAttribute('cert_prefix') . str_pad($this->getAttribute('reg_number'), 5, "0", STR_PAD_LEFT);
    }

    public function getPDF()
    {
        return (new \App\Certificates\Main\Certificate)
            ->student($this->getAttribute('student'))
            ->title($this->getAttribute('title'))
            ->qrCode($this->getAttribute('qrcode'))
            ->date($this->getAttribute('start_at')->format('d-m-Y'))
            ->duration($this->getAttribute('duration'))
            ->teacher($this->getAttribute('teacher'))
            ->regNumber($this->getAttribute('serial_number'))
            ->expiredAt(optional($this->getAttribute('expired_at'))->format('d-m-Y'))
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
    }
}
