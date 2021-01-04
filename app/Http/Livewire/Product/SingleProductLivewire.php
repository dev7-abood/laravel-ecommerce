<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Card;

class SingleProductLivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $slug;

    public $product;
    public $productProperty;

    public $quantity;

    protected $listeners = ['store', 'quantity' => 'asQuantity'];

    public function asQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

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


    public $checkbox = [];
    public $property;

    protected $rules = [
        'quantity' => 'required|max:2',
        'property' => 'required',
    ];

    public function store()
    {
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
                'product_name' => $this->product->name,
                'main_price' => $this->product->main_price,
                'after_discount' => $this->product->after_discount,
                'quantity' => $this->quantity,
                'total_price' => $this->product->after_discount * $this->quantity,
                'properties' => $property,
                'tax_val' => $this->product->tax_val,
                'image' => $this->product->image,
                'value_added_tax' => $this->product->value_added_tax,
                'tax_before_increase' => $this->product->tax_before_increase,
                'is_published' => true,
                'product_id' => $this->product->id,
                'user_id' => auth()->id(),
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
