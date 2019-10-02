<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use SoftDeletes; 
    
    protected $table = 'product_types';

    protected $fillable = [
        'id',
        'name',
        'description',
        'image',
    ];

    public function product() {
    	return $this->hasMany(Product::class, 'id_type', 'id');
    }
}
