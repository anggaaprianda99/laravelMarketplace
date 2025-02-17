<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use HasFactory, SoftDeletes;
    protected $table ='order_item';
    protected $fillable = [
        'price',
        'weight',
        'quantity',
        'product_id',
        'order_id',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

}
