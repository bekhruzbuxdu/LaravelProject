<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hunter_Model extends Model
{
    use HasFactory;
    protected $table = 'hunter';
    protected $fillable = ['name', 'email', 'comment'];
}
