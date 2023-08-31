<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperCategory extends Model
{
    use HasFactory;
    protected $table = "super_categories";

    public function categories()
    {
        return $this->hasMany(Category::class,'category_id');
    }
}
