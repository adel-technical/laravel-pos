<?php

namespace App\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $search = '';

    public function render()
    {
        $categories = ModelsCategory::where('category_name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.category', compact('categories'));
    }
}
