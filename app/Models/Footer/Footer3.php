<?php

namespace App\Models\Footer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer3 extends Model
{
    use HasFactory;
    protected $table='footers3';
    protected $fillable=[
        'name',
        'link',
        'status',
    ];
}
