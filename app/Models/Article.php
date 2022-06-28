<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'text', 'authorId', 'created_at', 'updated_at'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'authorId');
    }
}
