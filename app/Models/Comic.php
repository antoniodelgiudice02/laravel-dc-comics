<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'synopsis', 'author', 'pencils', 'inks', 'cover_by', 'rating', 'pages'];

    use HasFactory;
}
