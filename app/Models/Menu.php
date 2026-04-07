<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'price', 'price_numeric', 'image'];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}