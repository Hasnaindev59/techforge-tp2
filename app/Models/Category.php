<?php
/********************************
Developer:Anonymous
Anonymous Anonymous
********************************/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'description',
        'image',
        'delete',

    ];


    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories', 'category_id', 'product_id');
    }
}

