<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Cart;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;
    public function mount($slug){
        $this->slug=$slug;
    }
    public function store($product_id,$product_name,$product_price){
        \Gloudemans\Shoppingcart\Facades\Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','item added in cart');
        return redirect()->route('product.cart');
    }
    public function render()
    {
        $product=Product::where('slug',$this->slug)->first();
        $populars=Product::inRandomOrder()->limit(4)->get();
        $relateds=Product::where('category_id',$product->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.details-component',['product'=>$product,'populars'=>$populars,'relateds'=>$relateds])->layout('layouts.base');
    }
}
