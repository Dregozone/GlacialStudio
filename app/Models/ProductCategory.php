<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $fillable = [
        'name',
        'description',
        'tag',
        'order',
        'is_active',
    ];

    public function product() {

        return $this->belongsTo(Product::class, 'category_id', 'id');
    }
}
