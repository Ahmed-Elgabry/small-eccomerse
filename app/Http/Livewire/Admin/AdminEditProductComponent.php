<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $product_id;
    public $name;
    public $link;
    public $slug;
    public $regular_price;
    public $sale_price;
    public $featured = 0;
    public $image;
    public $category_id;
    public $newimage;
    public $store_id;
    public $stars;
    public $discount_code;
    
    public function mount($product_id)
    {
        $product = Product::find($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;
        $this->featured = $product->featured;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
        $this->store_id = $product->store_id;
        $this->stars = $product->stars;
        $this->link = $product->link;
        $this->discount_code = $product->discount_code;
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateProduct()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            // 'regular_price' => 'required',
            'sale_price' => 'required',
            'featured' => 'required',
            'category_id' => 'required',
            'store_id' => 'required',
            'link' => 'required',
        ]);

        $product = Product::find($this->product_id);
        $product->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'regular_price' => $this->regular_price,
            'sale_price' => $this->sale_price,
            'featured' => $this->featured,
            'store_id' => $this->store_id,
            'category_id' => $this->category_id,
            'stars' => $this->stars,
            'link' => $this->link,
            'discount_code' => $this->discount_code
        ]);

        if($this->newimage){
            $product->clearMediaCollection();
            $product->addMedia($this->newimage)->toMediaCollection();
        }

        $this->image = $product->image;
        $this->newimage = '';

        session()->flash('message', 'Product has been updated');
    }
    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        $stores = Store::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-edit-product-component',[
            'categories' => $categories,
            'stores' => $stores,
        ]);
    }
}
