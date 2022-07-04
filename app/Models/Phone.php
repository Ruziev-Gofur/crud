<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $table = 'phone';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'price', 'memory', 'screen_size', 'is_available'];
}
