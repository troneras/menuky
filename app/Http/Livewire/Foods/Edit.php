<?php

namespace App\Http\Livewire\Foods;

use App\Category;
use App\Item;
use Livewire\Component;

class Edit extends Component
{
    public $food_id;
    public $name;
    public $description;
    public $price;
    public $categories;
    public $menuOptions = [];


    private $rules = [
        'name' => 'required|string|max:255',
        'category' => 'exists:categories,id',
        'price' => 'required|numeric|between:0.00,999.99'
    ];

    public function mount($food, $categories)
    {

        $this->food_id = $food->id;
        $this->name = $food->name;
        $this->description = $food->description;
        $this->price = $food->price / 100;
        $this->categories = $categories;
    }


    public function updated($field)
    {
        $this->validateOnly($field, $this->rules);
    }

    public function addOption()
    {
        $this->menuOptions[] = [];
        $this->addExtra(count($this->menuOptions) - 1);
    }


    public function removeOption($index)
    {
        unset($this->menuOptions[$index]);
    }

    public function removeExtra($index, $extraIndex)
    {
        unset($this->menuOptions[$index][$extraIndex]);
    }

    public function addExtra($index)
    {
        $extra = [
            'name' => '',
            'price' => ''
        ];
        $this->menuOptions[$index][] = $extra;
    }
}
