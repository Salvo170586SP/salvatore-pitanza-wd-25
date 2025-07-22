<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\TrainingFactory> */
    use HasFactory;

     protected $fillable = [
        'admin_id',
        'title',
        'title_ita',
        'subtitle',
        'subtitle_ita',
        'icon_url',
        'description',
        'description_ita',
     ];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }
}
