<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name','discount', 'description', 'price', 'image'];

    public function details(){
        return $this->hasMany(ProductImage::class, 'id_products');
    }
}
