<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {

        return view('livewire.home-component')->layout('layouts.base');
    }
}
