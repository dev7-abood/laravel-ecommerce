<?php

namespace App\Http\Livewire\Product\ProductCategory;

use Livewire\Component;

use Livewire\WithPagination;

use App\Models\ProductCategory;

class Index extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
       $productCategory =  ProductCategory::paginate(1);

        return view('livewire.product.product-category.index',['productCategory' => $productCategory]);
    }
}
