<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['category_id','image','title','status'];

    public function category(){
        return $this->belongsTo(Category::class)->select('id','name','slug');
    }
}
