<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        return view('foods.index', [
            'categories' => Category::where('type','food')->orderBy('order','desc')->get()
        ]);
    }

    public function edit(Item $food)
    {
        $categories = Category::select('id','name')->where('type', 'food')->orderBy('order','desc')->get();

        return view('foods.edit', compact('food','categories'));
    }

    public function update(Item $food)
    {

        request()->validate(
            [
                'name' => 'required|string|max:255',
                'category' => 'exists:categories,id',
                'description' => 'required|string|max:255',
                'price' => 'required|numeric|between:0.00,999.99'
            ]
        );
        $toSave = request(['name','description']);
        $toSave ['price'] =  round( request('price') * 100 );

        $food->update($toSave);

        $food->categories()->sync(request('categories'));

        return redirect()->route('foods');
    }
}
