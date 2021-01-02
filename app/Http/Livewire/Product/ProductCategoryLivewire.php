<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ProductCategory;

use App\Models\Brand;


class ProductCategoryLivewire extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $brandSlug;

    public function render()
    {
        if ($this->brandSlug == null){
            $productCategory = ProductCategory::where('is_published', true)->paginate(2);
            return view('livewire.product.product-category-livewire',['productCategory' => $productCategory]);
        }
        $productCategory = Brand::where('slug', $this->brandSlug)->where('is_published', true)->first()->productCategories()->paginate(2);
        return view('livewire.product.product-category-livewire',['productCategory' => $productCategory]);
    }
}
