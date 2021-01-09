<?php

namespace App\Http\Livewire\LandingPage;

use App\Models\ProductRating;
use Livewire\Component;
use App\Models\Product;


use App\Helpers\CurrencyConverter;
use Illuminate\Support\Str;

class ListProductsLivewire extends Component
{

    protected $listeners = ['loadMoreProducts'];

    public $prePage = 8;

    public $currency;

    public $rating;


    public function loadMoreProducts()
    {
        $this->prePage = $this->prePage + 4;
    }

    public function mount()
    {
        $currencyConverter =  new CurrencyConverter();
        $this->currency = $currencyConverter->currency;
    }

    public function productRating($id)
    {
        $rating = ProductRating::where('product_id', $id)->selectRaw('SUM(rating)/COUNT(user_id) AS avg_rating')->first()->avg_rating;
        return (int) round($rating, 1);
    }

    public function render()
    {
        $products = Product::where('is_published', true)->orderBy('updated_at', 'DESC');
        $total = $products->count();
        return view('livewire.landing-page.list-products-livewire',
            [
                'products' => $products->paginate($this->prePage),
                'total' => $total,
            ]);
    }

}
