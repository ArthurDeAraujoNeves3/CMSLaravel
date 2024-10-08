<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    use HasFactory;
    protected $table = "About_me";
    public $timestamps = false;
    public $incrementing = false; // Faz com que o toArray() não converta o id para interger
}
