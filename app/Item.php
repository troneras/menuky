<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function addToCategory(Category $category)
    {
        return $this->categories()->save($category);
    }

     public function categories()
    {
        return $this->belongsToMany(Category::class, 'item_categories', 'item_id', 'category_id');
    }

    public function priceFormatted()
    {

        $f =  new \NumberFormatter("es_ES", \NumberFormatter::CURRENCY);
        return $f->formatCurrency($this->price/100, "EUR");
    }


}
