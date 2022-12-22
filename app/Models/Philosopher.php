<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Philosopher extends Model
{
    use HasFactory;
    protected $fillable = [
        'philosopher',
        'born',
        'died'
    ];
}
