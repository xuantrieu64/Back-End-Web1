<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_detail', 'order_id', 'product_id');
    }
}