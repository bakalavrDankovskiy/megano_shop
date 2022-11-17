<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Attachment\Models\Attachment as OrchidAttachmentModel;

class Attachment extends OrchidAttachmentModel
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];

    public function banner()
    {
        return $this->hasOne(Banner::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
