<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class products extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'brand_id', 'price','image'];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(brands::class);
    }
    public function order_items(): HasMany
    {
        return $this->hasMany(order_items::class);
    }

    public function getimage()
    {
        
        if(str_starts_with($this->image, 'http'))
        {
            
            return $this->image;
        }
        
        return '/storage/'.$this->image;
    }
}
