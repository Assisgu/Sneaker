<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'units', 'size_id'];

    public function Product(){
        return $this->belongsTo(Product::class);
    }

    public function Size(){
        return $this->belongsTo(Size::class);
    }
}
