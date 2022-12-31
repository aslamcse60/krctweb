<?php

namespace App\Models\Footer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer1 extends Model
{
    use HasFactory;
    protected $table='footers1';
    protected $fillable=[
        'name',
        'link',
        'status',
    ];
}
