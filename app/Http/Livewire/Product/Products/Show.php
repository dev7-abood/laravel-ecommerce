<?php

namespace App\Http\Livewire\Product\Products;

use Livewire\Component;

use App\Models\ProductCategory;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $slug;

    public function render()
    {

       $products = ProductCategory::where('slug', $this->slug)->first()->products()->paginate(6);
       $productCat = ProductCategory::where('slug', $this->slug)->first();

       if ($products)
       {
           return view('livewire.product.products.show', ['products' => $products, 'productCat' => $productCat]);
       }
       abort(404);
    }
}
//ProductCategory::with(['products', function($query){
//    $query->paginate(10);
//}])->where('slug', 'phone-phone')->first()
