<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','price','old_price','quantity','short_description','description','image','category_id','trash'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
