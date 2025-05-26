<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drawing extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\DrawingFactory> */
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'img_url',
        'img_name',
        'url_web',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }
}
