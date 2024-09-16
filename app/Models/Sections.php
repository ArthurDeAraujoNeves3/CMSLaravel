<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false; // Faz com que o toArray() não converta o id para interger
}
