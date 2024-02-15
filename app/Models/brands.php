<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class brands extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'country_id', 'admin_id'];

    public function country_id(): BelongsTo
    {
        return $this->belongsTo(countries::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
}
