<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibadah extends Model
{
    use HasFactory;

    protected $table = 'ibadahs';

    protected $fillable = [
        'name',
        'category',
        'date',
    ];
}
