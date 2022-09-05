<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'colour', 'age', 'country', 'sex', 'father', 'mother', 'microNo', 'passportNo', 'image'];
}
