<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    protected $fillable = ['title','url_clean','content','category_id','posted'];
    use HasFactory;

    public function category(){
        return $this ->belongsTo(Category::class);
    }

}