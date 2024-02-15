<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'continent'];

    public function brands(): HasMany
    {
        return $this->hasMany(brands::class);
    }

    public function customers(): HasMany
    {
        return $this->hasMany(customers::class);
    }
}
