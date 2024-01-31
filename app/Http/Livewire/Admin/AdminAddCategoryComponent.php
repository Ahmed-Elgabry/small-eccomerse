<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $parentId;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required'
        ]);
    }

    public function storeCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);
        Category::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'parent_id' => $this->parentId == '*' ? NULL : $this->parentId
        ]);
        session()->flash('message', 'Category has been created successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component',[
            'categories' => Category::all()
        ]);
    }
}
