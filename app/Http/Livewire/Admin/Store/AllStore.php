<?php

namespace App\Http\Livewire\Admin\Store;

use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;

class AllStore extends Component
{

    use WithPagination;
    public $store_id;

    public function deleteStore()
    {
        $store = Store::find($this->store_id);
        $store->delete();
        session()->flash('message', 'store has been deleted successfully!');
    }
    public function render()
    {
        $stores = Store::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.store.all-store',[
            'stores'=>$stores
        ]);
    }
}
