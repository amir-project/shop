<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function parent(){
        return  $this->belongsTo(Category::class,'category_id');
    }
    public function children(){
        return $this->hasMany(Category::class,'category_id');
    }
    protected $guarded=[];
    use HasFactory;
}
