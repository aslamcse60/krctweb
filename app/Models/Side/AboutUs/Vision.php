<?php

namespace App\Models\Side\AboutUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    use HasFactory;
    protected $table='visions';
    protected $fillable=[
        'description',
    ];
}
