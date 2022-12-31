<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenuItem extends Model
{
    use HasFactory;
    protected $table='sub_menu_items';
    protected $fillable=[
        'name',
        'menu_item_id',
        'link',
        'status',
    ];
}
