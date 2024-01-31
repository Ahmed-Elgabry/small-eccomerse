<?php

namespace App\Http\Livewire\Admin\Store;

use App\Models\Store;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditStore extends Component
{
    use WithFileUploads;
    public $name;
    public $link;
    public $image;
    public $store_id;

    public function mount($store_id)
    {
        $this->store_id = $store_id;
        $store = Store::find($store_id);
        $this->name = $store->name;
        $this->link = $store->link;
        $this->image = $store->image;
    }

    public function updateStore()
    {
        $this->validate([
            'name' => 'required|string|unique:stores,name,'.$this->store_id,
            'link' => 'required|string',
            'image' => 'required|file|mimes:png,jpg,jpeg,gif,webp|max:2048',
        ]);

        $store = Store::findOrFail($this->store_id);

        $store->update([
            'name' => $this->name,
            'link' => $this->link
        ]);

        if($this->image){
            $store->clearMediaCollection();
            $store->addMedia($this->image)->toMediaCollection();
        }
        session()->flash('message', 'Store has been updated');
    }
    public function render()
    {
        return view('livewire.admin.store.edit-store');
    }
}
