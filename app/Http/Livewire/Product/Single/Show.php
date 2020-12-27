<?php

namespace App\Http\Livewire\Product\Single;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;


    protected $paginationTheme = 'bootstrap';


    public $slug;

    public function render()
    {
        $product = Product::with('images')->where('slug', $this->slug)->first();
        if ($product) {
            return view('livewire.product.single.show', compact('product'));
        }
        abort(404);
    }
}
