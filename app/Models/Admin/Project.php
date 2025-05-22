<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\ProjectFactory> */
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'title',
        'img_url',
        'img_name',
        'url_git',
        'url_web',
        'description',
        'is_aviable'
    ];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }
}
