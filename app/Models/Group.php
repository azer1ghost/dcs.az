<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use Translatable;

    protected $connection = "mysql";

    protected array $translatable = ['title', 'meta_description', 'detail'];

    public function trainings(): HasMany
    {
        return $this->hasMany(Training::class);
    }
}
