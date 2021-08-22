<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;
use Livewire\WithPagination;

class AdminHomeSliderComponent extends Component
{use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function deleteSlider($id){
        $slider=HomeSlider::find($id);
        $slider->delete();
        session()->flash('message','Slider has been deleted');
    }
    public function render()
    {
        $sliders=HomeSlider::paginate(5);
        return view('livewire.admin.admin-home-slider-component',['sliders'=>$sliders])->layout('layouts.base');
    }
}
