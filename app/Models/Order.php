<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'title',
        'quantity',
        'price',
        'image',
        'delivery_status',
    ];
}
