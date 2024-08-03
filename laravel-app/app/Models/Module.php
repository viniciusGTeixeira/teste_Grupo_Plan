<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'training_id', 'title', 'content', 'video_url'
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
