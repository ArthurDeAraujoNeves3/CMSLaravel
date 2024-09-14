<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $table = "Hero";
    public $timestamps = false;
    public $incrementing = false; // Faz com que o toArray() não converta o id para interger
}
