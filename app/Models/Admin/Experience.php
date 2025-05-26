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
        'subtitle',
        'description',
     ];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }
}
