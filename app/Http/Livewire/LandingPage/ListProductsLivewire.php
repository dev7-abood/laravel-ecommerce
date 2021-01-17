<?php

namespace App\Http\Livewire\LandingPage;

use App\Models\Card;
use App\Models\ProductRating;
use Livewire\Component;
use App\Models\Product;


use App\Helpers\CurrencyConverter;

class ListProductsLivewire extends Component
{

    protected $listeners = ['loadMoreProducts'];

    public $prePage = 8;

    public $currency;

    public $rating;


    public function mount()
    {
        $converter = new CurrencyConverter();
        $this->currency = $converter->currency;
    }


    public function loadMoreProducts()
    {
        $this->prePage = $this->prePage + 4;
    }

    public function productRating($id)
    {
        $rating = ProductRating::where('product_id', $id)->selectRaw('SUM(rating)/COUNT(user_id) AS avg_rating')->first()->avg_rating;
        return (int) round($rating, 1);
    }

    public function calculateCurrency($price)
    {
        return round((int) $this->currency['value'] * (int) $price, 2);
    }


    public function addToFavorite($uuid)
    {
        $id = Product::where('uuid', $uuid)->first()->id;
        auth()->user()->productFavorites()->sync([$id], false);

        $this->dispatchBrowserEvent('swal', [
            'title' => __('products.added_to_favorites'),
            'timer'=>3000,
            'icon'=>'success',
            'toast'=>true,
            'position'=>'top-right'
        ]);
        $this->emit('refreshFavorite');
    }


    public function addToCard($uuid)
    {
        $product = Product::where('uuid', $uuid)->first();

        Card::create(
            [
                'pay' => $this->calculateCurrency($product->pay),
                'product_name' => $product->name,
                'quantity' => 1,
                'properties' => null,
                'image' => $product->image,
                'discount_percent' => $product->discount_percent,
                'tax_val_percent' => $product->tax_val_percent,
                'value_added_tax' => $product->value_added_tax,
                'vat_after_discount' => $product->vat_after_discount,
                'is_published' => true,
                'product_id' => $product->id,
                'currency_type' => $this->currency['currency_type'],
                'user_id' => auth()->id(),
            ]
        );

        $this->dispatchBrowserEvent('swal', [
            'title' => __('products.added_to_card', ['product_name' => $product->name]),
            'timer' => 3000,
            'icon' => 'success',
            'toast' => true,
            'position' => 'top-right'
        ]);

        $this->emit('refreshCard');
    }


    public function render()
    {
        $products = Product::with('images')->where('is_published', true)->orderBy('updated_at', 'DESC');
        $total = $products->count();
        return view('livewire.landing-page.list-products-livewire',
            [
                'products' => $products->paginate($this->prePage),
                'total' => $total,
            ]);
    }

}
