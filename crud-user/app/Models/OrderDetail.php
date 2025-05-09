<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';

    public $incrementing = true;

    protected $fillable = [
        'order_id',
        'product_id',
    ];
}