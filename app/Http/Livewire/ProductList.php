<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component as Component;

class ProductList extends Component
{
    public $search = '';

    public $sort = 'inStock';

    public $sortOption = 'desc';
    public $category;

    public function render()
    {
        $this->sort !== 'inStock' && $this->sortOption = 'asc';
        return view('livewire.product-list', [
            'products' => Product::latest()
            ->where('category_id', $this->category->id ?? null)
            ->where('title', 'like', '%' . $this->search . '%')
            ->orderby($this->sort, $this->sortOption)
            ->get(),
        ]);
    }
}
