<?php

namespace App\View\Components\Navigation;

use Illuminate\View\Component;

class Category extends Component
{
    public $category;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($category)
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation.category',[
            'category' => $this->category
        ]);
    }
}
