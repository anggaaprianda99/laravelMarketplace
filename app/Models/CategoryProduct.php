<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryProduct extends Model
{
    use HasFactory, SoftDeletes;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'category_product';
    protected $fillable = [
        'name',
    ];

    public function products(){
        return $this->hasMany(Product::class, 'categories_id', 'id');
    }
    
}
