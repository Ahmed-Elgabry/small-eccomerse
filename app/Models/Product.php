<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function getImageAttribute(): string{
        return $this->getFirstMediaUrl() ?? '';
    }

    public function getRatingAttribute(){
        return round($this->stars / 5 * 100,2);
    }

    public function store(): BelongsTo{
        return $this->belongsTo(Store::class);
    }
}
