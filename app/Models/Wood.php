<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wood extends Model
{
    use HasFactory;
    protected $table ='wood';
    protected $fillable = [
        'name',
        'type',
        'price',
        'quantity',
    ];
}
