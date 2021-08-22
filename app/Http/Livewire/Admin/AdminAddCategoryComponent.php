<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use \Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{
    public  $name;
    public  $slug;
    public  $short_description;
    public  $description;
    public  $regular_price;
    public  $sale_price;
    public  $sku;
    public  $stock_status;
    public  $featured;
    public  $quantity;
    public  $image;
    public  $category_id;


    public  function generateslug(){
        $this->slug=Str::slug($this->name);
    }
    public function sorecategory(){
        $category=new Category();
        $category->name=$this->name;
        $category->slug=$this->slug;
        $category->save();
        session()->flash('message','Category has been created successfuly!!!');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
