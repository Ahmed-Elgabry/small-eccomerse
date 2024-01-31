<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $link;
    public $slug;
    public $regular_price;
    public $sale_price;
    public $featured = 0;
    public $image;
    public $category_id;
    public $store_id;
    public $stars;
    public $discount_code;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addProduct()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            // 'regular_price' => 'required',
            'sale_price' => 'required',
            'featured' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'store_id' => 'required',
            'link' => 'required',
        ]);

        $product = Product::query()->create([
            'name' => $this->name,
            'slug' => $this->slug,
            'regular_price' => $this->regular_price,
            'sale_price' => $this->sale_price,
            'featured' => $this->featured,
            'store_id' => $this->store_id,
            'category_id' => $this->category_id,
            'stars' => $this->stars,
            'link' => $this->link,
            'discount_code' => $this->discount_code,
        ]);

        if($this->image){
            $product->addMedia($this->image)->toMediaCollection();
        }
        $this->image = null;
        session()->flash('message', 'Product has been added');
    }

    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        $stores = Store::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-add-product-component',[
            'categories' => $categories,
            'stores' => $stores,
        ]);
    }
}
