<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Milon\Barcode\DNS2D;

class Certificate extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class);
    }

    public function getQrcodeAttribute(): string
    {
        $slug = route('certificate',  $this->getAttribute('slug'));

        $base64Qrcode = (new DNS2D())->getBarcodePNG($slug,'QRCODE','10','10');

        return 'data:image/png;base64,' . $base64Qrcode;
    }
}
