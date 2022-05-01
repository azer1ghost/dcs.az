<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends \TCG\Voyager\Models\Role
{
    protected $connection = "sqlite";

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }
}
