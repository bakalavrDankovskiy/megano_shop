<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'admin_settings';

    protected $fillable = [
        'name',
        'value'
    ];
}
