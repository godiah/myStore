<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class,'sub_category_id');
    }

    public function superCategories()
    {
        $this->belongsTo(SuperCategory::class);
    }
}
