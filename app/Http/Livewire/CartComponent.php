<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use App\Models\Product;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartComponent extends Component
{

    public $haveCouponcode;
    public $couponCode;
    public  $discount;
    public  $subtotalAfterdiscount;
    public  $taxeAfterdiscount;
    public $totalAfterdiscount;



    public function increaseQuantity($rowId){
        $product=Cart::get($rowId);
        $qty=$product->qty +1;
        Cart::update($rowId,$qty);
}

    public function decreaseQuantity($rowId){
        $product=Cart::get($rowId);
        $qty=$product->qty - 1;
        Cart::update($rowId,$qty);
    }
    public function destroy($rowId){
        Cart::remove($rowId);

       session()->flash('success_message','Item has been deleted');
       return redirect()->back();
    }

    public function destroyAll(){
        Cart::destroy();

        session()->flash('success_message','art has been deleted');
        return redirect()->back();
    }
    public  function applyCouponCode(){
        $coupon=Coupon::where('code',$this->couponCode)->where('expiry_date','>=',Carbon::today())->where('cart_value','<=',Cart::subtotal())->first();
        if(!$coupon){
            session()->flash('coupon_message','Coupon code is invalid!');
            return;
        }
        session()->put('coupon',[
            'code'=>$coupon->code,
            'type'=>$coupon->type,
            'value'=>$coupon->value,
            'cart_value'=>$coupon->cart_value

        ]);
    }

    public  function calculateDiscounts(){
        if (session()->has('coupon')){
            if (session()->get('coupon')['type']=='fixed'){
                $this->discount=session()->get('coupon')['value'];
            }else{
                $this->discount=(Cart::subtotal()*session()->get('coupon')['value'])/100;
            }
            $this->subtotalAfterdiscount=Cart::subtotal()-$this->discount;
            $this->taxeAfterdiscount=($this->subtotalAfterdiscount *config('cart.tax'))/100;
            $this->totalAfterdiscount=$this->subtotalAfterdiscount+$this->taxeAfterdiscount;
        }
    }

    public function removeCoupon(){
        session()->forget('coupon');
        $this->haveCouponcode=2;
        $this->couponCode="";
    }

    public  function checkout(){
        if (Auth::check()){

            return $this->redirectRoute('checkout');

        }else{

            return $this->redirectRoute('login');
        }
    }

    public  function setAmountForCheckout(){
        if (session()->has('coupon')){
            session()->put('checkout',[
                'discount'=>$this->discount,
                'subtotal'=>$this->subtotalAfterdiscount,
                'tax'=>$this->taxeAfterdiscount,
                'total'=>$this->totalAfterdiscount,]);
        }else{
            session()->put('checkout',[
                'discount'=>0,
                'subtotal'=>Cart::subtotal(),
                'tax'=>Cart::tax(),
                'total'=>Cart::total()]);
        }
    }
    public function render()
    {
        if (session()->has('coupon')){

            if (Cart::subtotal() < session()->get('coupon')['cart_value']){
                session()->forget('coupon');
            }else{
                $this->calculateDiscounts();

            }
        }
        $populars=Product::inRandomOrder()->limit(4)->get();
        $this->setAmountForCheckout();
        return view('livewire.cart-component',['populars',$populars])->layout('layouts.base');
    }
}
