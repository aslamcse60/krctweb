<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;
    protected $table='placements';
    protected $fillable=[
        'image',
        'name',
        'department',
        'company',
        'status',
    ];
}
