<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Card;

use App\Helpers\CurrencyConverter;
use Illuminate\Http\Response;

class SingleProductLivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['store', 'quantity' => 'asQuantity'];

    public $slug;

    public $product;

    public $productProperty;

    public $quantity;

    public function mount()
    {
        $this->quantity = 1;
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

    public function asQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


    public $checkbox = [];
    public $property;

    protected $rules = [
        'quantity' => 'required|max:2',
        'property' => 'required',
    ];

    public function store()
    {
        sleep(3);
//      $this->validate($this->rules);
        $checkbox = array_filter($this->checkbox, function ($check){
            return $check == true;
        });
        $property = '';
        foreach (array_keys($checkbox) as $pro){
            $property .= $pro;
        }
        $property .= $this->property;

        Card::create(
            [
                'pay'  => $this->product->pay ,
                'product_name' => $this->product->name,
                'quantity' => $this->quantity,
                'properties' => $property,
                'image' => $this->product->image ,
                'discount_percent' => $this->product->discount_percent ,
                'tax_val_percent' => $this->product->tax_val_percent ,
                'value_added_tax' => $this->product->value_added_tax ,
                'vat_after_discount' => $this->product->vat_after_discount ,
                'is_published' => true ,
                'product_id' => $this->product->id ,
                'user_id' => auth()->id()
            ]
        );

      $this->dispatchBrowserEvent('swal', [
           'title' => __('products.added_to_card', ['product_name' => $this->product->name ]),
           'timer'=>3000,
           'icon'=>'success',
           'toast'=>true,
           'position'=>'top-right'
        ]);

        $this->emit('refreshCard');
    }

    public function submitAddToCard()
    {
        $cardIsExist = Card::where('product_name', $this->product->name)->first();
        if ($cardIsExist)
        {
            $this->dispatchBrowserEvent('conform_product_exist_or_not');
            $this->emit('refreshCard');
        }else{
            $this->store();
        }
    }
}
