<?php

namespace App\Http\Livewire\Admin\Store;

use App\Models\Store;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddStore extends Component
{
    use WithFileUploads;
    public $name;
    public $link;
    public $image;

    public function addStore()
    {
        $this->validate([
            'name' => 'required|string|unique:stores,name',
            'link' => 'required|string',
            'image' => 'required|file|mimes:png,jpg,jpeg,gif,webp|max:2048',
        ]);

        $store = Store::create([
            'name' => $this->name,
            'link' => $this->link,
        ]);

        if($this->image){
            $store->addMedia($this->image)->toMediaCollection();
        }
        session()->flash('message', 'Store has been added');
    }
    public function render()
    {
        return view('livewire.admin.store.add-store');
    }
}
