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

    public function getQrcodeAttribute(): string
    {
        $slug = route('certificate',  $this->getAttribute('slug'));

        return public_path(DNS2D::getBarcodePNGUri($slug,'QRCODE','100','100'));
    }

    public function getDurationAttribute(): string
    {
        $duration = $this->getAttribute('start_at')->diff($this->getAttribute('end_at'))->d > 0 ?? 1;

        return $duration . ' day';
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
            ->regNumber($this->getAttribute('reg_number'))
            ->expiredAt($this->getAttribute('expired_at')->format('d-m-Y'))
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

            //TODO reg_number query and generate
            $certificate->setAttribute('reg_number', Str::slug(Str::random('10')));
        });
    }
}
