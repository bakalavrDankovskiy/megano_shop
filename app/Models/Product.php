<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function images()
    {
        return $this->belongsTo(Attachment::class, 'attachment_id', 'id');
    }

}
