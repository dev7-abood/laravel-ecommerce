<?php

namespace App\Http\Livewire\Product\ProductCategory;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ProductCategory;

use App\Models\Brand;


class Index extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $brandSlug;

    public function render()
    {
        if ($this->brandSlug == null){
            $productCategory = ProductCategory::where('is_published', true)->paginate(2);
            return view('livewire.product.product-category.index',['productCategory' => $productCategory]);
        }
        $productCategory = Brand::where('slug', $this->brandSlug)->where('is_published', true)->first()->productCategories()->paginate(2);
        return view('livewire.product.product-category.index',['productCategory' => $productCategory]);
    }
}
