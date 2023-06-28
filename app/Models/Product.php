<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'stock',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    // bisa mempunya banyak cart
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
