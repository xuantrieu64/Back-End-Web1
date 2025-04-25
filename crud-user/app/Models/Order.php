<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'total_amount',
        'address',
        'created_at',
        'updated_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class); 
    }

    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_detail', 'order_id', 'product_id');
    }
    public function orders():HasMany
    {
        return $this->hasMany(User::class); 
    }
}