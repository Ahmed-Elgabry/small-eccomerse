<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{

    public $newProducts;
    public $featuredProducts;
    public $topProducts;
    public $specialOfferProducts;

    public function mount(){
        // $this->newProducts = Product::latest()->get();
        // $this->featuredProducts = Product::where('featured',true)->get();
        // $this->topProducts = Product::whereNotNull('stars')->orderBy('stars','DESC')->get();
        
        $this->newProducts = Product::latest()->take(12)->get();

        $this->featuredProducts = Product::where('featured', true)
   ->orderBy('created_at', 'desc')
   ->take(12)
   ->get();


        // $this->specialDiscountProducts = Product::whereNotNull('discount_code')
        $this->specialOfferProducts = Product::whereNotNull('discount_code')
                                     ->orderBy('created_at','DESC')
                                     ->take(12)
                                     ->get();

    }
    public function render()
    {
        return view('livewire.home-component');
    }
}
