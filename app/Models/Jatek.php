<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jatek extends Model
{
    use HasFactory;

    protected $primaryKey = 'jatek_id';

    protected $fillable = [
        'neve',
        'platform',
        'darabszam',
        'ar'
    ];
}
