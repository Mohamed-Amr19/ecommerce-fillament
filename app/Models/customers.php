<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class customers extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','date_of_birth','gender','country_id'];


    public function orders(): HasMany
    {
        return $this->hasMany(orders::class);
    }

    public function brands(): HasMany
    {
        return $this->hasMany(brands::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(countries::class);
    }
}
