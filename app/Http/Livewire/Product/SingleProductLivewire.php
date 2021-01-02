<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Card;

use Illuminate\Http\Request;

class SingleProductLivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $slug;

    public $product;
    public $productProperty;

    protected $inputs = [
        'name'
    ];


    public function mount()
    {
        $this->p_property_name[0] = '';
    }

    public function render()
    {
        $this->product = Product::with(['images'])->where('slug', $this->slug)->first();
        if (!empty($this->product)) {
            $this->productProperty = Product::where('slug', $this->slug)->first()->productPropertyNames->toArray();
            return view('livewire.product.single-product-livewire',
                ['product' => $this->product, 'productProperty' => $this->productProperty]);
        }
        abort(404);
    }


    public $quantity = 1;
    public $checkbox = [];
    public $p_property_name = [];
    public $property;

    public function increment()
    {
        if ($this->quantity <= 9)
            $this->quantity++;
    }

    public function decrement()
    {
        if ($this->quantity > 1)
            $this->quantity--;
    }


    protected $rules = [
        'quantity' => 'required|max:2',
        'property' => 'required',
    ];

    public function submitAddToCard(Request $request)
    {


        dd($this->property);
//        $this->validate($this->rules);
//dd($this->quantity);
//        Card::create(
//            [
//                'product_name' => $this->product->name,
//                'main_price' => $this->product->main_price,
//                'after_discount' => $this->product->after_discount,
//                'quantity' => $this->quantity,
//                'total_price' => $this->product->after_discount * $this->quantity,
//                'properties' => 'dsdsd',
//                'tax_val' => $this->product->tax_val,
//                'value_added_tax' => $this->product->value_added_tax,
//                'tax_before_increase' => $this->product->tax_before_increase,
//                'is_published' => true,
//                'product_id' => $this->product->id,
//                // hard code
//                'user_id' => 1,
//            ]
//        );
//
        $checkbox = array_filter($this->checkbox, function ($check){
            return $check == true;
        });

        dd($this->p_property_name);
//        dd(array_keys($checkbox));
    }


}


//        $this->dispatchBrowserEvent('swal', [
//            'title' => __('products.added_to_favorites'),
//            'timer'=>3000,
//            'icon'=>'success',
//            'toast'=>true,
//            'position'=>'top-right'
//        ]);
