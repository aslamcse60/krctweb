<?php

namespace App\Models\Administration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chairman extends Model
{
    use HasFactory;
    protected $table='chairman';
    protected $fillable=[
        'name',
        'image',
        'description',
    ];
}
