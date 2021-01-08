<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;
use App\Models\Product;

class ListProductsLivewire extends Component
{

    protected $listeners = ['loadMoreProducts'];

    public $prePage = 8;
//    public $total;
//    public $to;

    public function loadMoreProducts()
    {
        $this->prePage = $this->prePage + 4;
    }

    public function render()
    {
        $products = Product::where('is_published', true)->orderBy('updated_at', 'DESC');
        $total = $products->count();
        return view('livewire.landing-page.list-products-livewire',
            [
                'products' => $products->paginate($this->prePage),
                'total' => $total
            ]);
    }

}
