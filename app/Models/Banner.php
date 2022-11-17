<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Banner extends Model
{
    use HasFactory, AsSource, Attachable;

    /**
     * @var array
     */

    protected $guarded = [];

    public function attachments()
    {
        return $this->belongsTo(Attachment::class, 'attachment_id', 'id');
    }
}
