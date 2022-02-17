<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','qty'];
    
    // public function products(){
    //     return $this->belongsTo(Product::class);
    // }
    public function products(){
        return $this->belongsTo(Product::class);
    }

}

