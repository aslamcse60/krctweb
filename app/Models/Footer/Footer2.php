<?php

namespace App\Models\Footer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer2 extends Model
{
    use HasFactory;
    protected $table='footers2';
    protected $fillable=[
        'name',
        'link',
        'status',
    ];
}
