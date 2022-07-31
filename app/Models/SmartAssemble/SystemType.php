<?php

namespace App\Models\SmartAssemble;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemType extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $casts = ['image' => 'array'];

    protected $fillable = ['name', 'brief','description', 'slug', 'image', 'start_price_from', 'status', 'type', 'tags', 'show_in_menu', 'system_category_id'];

    public function category()
    {
        return $this->belongsTo(SystemCategory::class, 'system_category_id');
    }
}
