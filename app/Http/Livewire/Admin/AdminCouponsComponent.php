<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCouponsComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function deleteCoupon($id){
        $coupon=Coupon::find($id);
        $coupon->delete();
        session()->flash('message','Coupon has been deleted');
    }
    public function render()
    {
        $coupons=Coupon::paginate();
        return view('livewire.admin.admin-coupons-component',['coupons'=>$coupons])->layout('layouts.base');
    }
}
