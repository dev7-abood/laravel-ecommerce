<?php

namespace App\Http\Livewire\Product\SingleProduct;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Card;

class Show extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $slug;

    protected $inputs = [
        'name'
    ];

    public function render()
    {
        $product = Product::with(['images'])->where('slug', $this->slug)->first();
        $productProperty = Product::where('slug', $this->slug)->first()->productPropertyNames->toArray();
        if ($product) {
            return view('livewire.product.single-product.show', compact('product','productProperty'));
        }
        abort(404);
    }


    public function addToCard()
    {

    }


}
