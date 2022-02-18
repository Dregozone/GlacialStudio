<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'price',
        'details',
        'category_id',
        'order',
        'link',
        'is_active',
    ];

    public function productCategory() {

        return $this->hasMany(ProductCategory::class, 'id', 'category_id');
    }
}
