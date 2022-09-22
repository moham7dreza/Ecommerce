<?php

namespace App\Models\SmartAssemble;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemGallery extends Model
{
    protected $table = 'system_galleries';

    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $casts = ['image' => 'array'];


    public function category()
    {
        return $this->belongsTo(SystemCategory::class);
    }


}
