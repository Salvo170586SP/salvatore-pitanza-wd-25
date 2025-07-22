<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'admin_id',
        'title',
        'title_ita',
        'description',
        'description_ita',
        'img_url',
        'img_name',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }
}
