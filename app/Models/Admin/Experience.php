<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\ExperienceFactory> */
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'title',
        'title_ita',
        'subtitle',
        'subtitle_ita',
        'description',
        'description_ita',

     ];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }
}
