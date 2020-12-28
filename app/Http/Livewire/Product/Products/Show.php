<?php

namespace App\Http\Livewire\Product\Products;

use Livewire\Component;

use App\Models\ProductCategory;
use Livewire\WithPagination;

use App\Models\User;



class Show extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $slug;

    public function addToFavorite($productId)
    {
//        return Product::find(2)->productFavorites()->detach();

     // hard code
     User::find(1)->productFavorites()->sync([$productId], false);

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Feedback Saved',
            'timer'=>3000,
            'icon'=>'success',
            'toast'=>true,
            'position'=>'top-right'
        ]);
    }


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
