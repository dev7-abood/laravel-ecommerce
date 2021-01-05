<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

use App\Models\ProductCategory;

use Livewire\WithPagination;

class ProductsLivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $slug;

    public function addToFavorite($uuid)
    {
//  return ProductHelper::find(2)->productFavorites()->detach();
    $id = Product::where('uuid', $uuid)->first()->id;
     auth()->user()->productFavorites()->sync([$id], false);

        $this->dispatchBrowserEvent('swal', [
            'title' => __('products.added_to_favorites'),
            'timer'=>3000,
            'icon'=>'success',
            'toast'=>true,
            'position'=>'top-right'
        ]);
        $this->dispatchBrowserEvent('addToFavorite', [
              'uuid' => $uuid,
        ]);

        $this->emit('refreshFavorite');
    }

    public function render()
    {

       $products   = ProductCategory::where('slug', $this->slug)->first()->makeVisible(['is_favorite'])->products()->paginate(6);
       $productCat = ProductCategory::where('slug', $this->slug)->first();

       if ($products) {
           return view('livewire.product.products-livewire', ['products' => $products, 'productCat' => $productCat]);
       }
       abort(404);
    }
}
