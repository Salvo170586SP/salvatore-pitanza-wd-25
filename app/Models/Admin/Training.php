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
        'subtitle',
        'icon_url',
        'description',
     ];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }
}
