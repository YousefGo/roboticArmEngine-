<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engin extends Model
{
    use HasFactory;
    protected  $table="engines";
    protected $fillable = [
        'engineN1',
        'engineN2',
        'engineN3',
        'engineN4',
        'engineN5',
        'engineN6',
        'status'
    ];
}
