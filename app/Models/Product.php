<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    

    protected $fillable = ['name', 'description', 'price', 'brand_id', 'image'];

    public function Brands(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function Tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function hasTag($tag_id){  //pluck retorna os id's (ou o que eu quiser)
        return in_array($tag_id, $this->Tags->pluck('id')->toArray());
    }
}
