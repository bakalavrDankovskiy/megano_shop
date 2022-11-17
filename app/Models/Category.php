<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function parent()
    {
        return $this->hasOne(Category::class);
    }

    public function images()
    {
        return $this->belongsTo(Attachment::class, 'attachment_id', 'id');
    }
}
