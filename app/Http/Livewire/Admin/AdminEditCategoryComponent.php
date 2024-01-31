<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Str;
use App\Models\Category;
use Livewire\Component;

class AdminEditCategoryComponent extends Component
{
    public $category_id;
    public $name;
    public $slug;
    public $parentId;

    public function mount($category_id)
    {
        $category = Category::find($category_id);
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->parentId = $category->parent_id;
    }
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

    public function updateCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $category = Category::find($this->category_id);
        $category->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'parent_id' => $this->parentId == '*' ? NULL : $this->parentId
        ]);
        session()->flash('message', 'Category has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-category-component',[
            'categories' => Category::all()
        ]);
    }
}
