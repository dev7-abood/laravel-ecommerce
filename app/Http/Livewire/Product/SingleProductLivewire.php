<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Card;
use App\Models\ProductRating;


class SingleProductLivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['store', 'quantity' => 'asQuantity', 'rating'];

    public $slug;
    public $product;
    public $productProperty;
    public $quantity;
    public $rating;

    public function mount()
    {
        $this->product = Product::with(['images'])->where('slug', $this->slug)->first();
        $rating = ProductRating::where('product_id', $this->product->id)->selectRaw('SUM(rating)/COUNT(user_id) AS avg_rating')->first()->avg_rating;
        $this->rating = (int)round($rating, 1);
        $this->quantity = 1;

    }

    public function render()
    {
        if (!empty($this->product)) {
            $this->productProperty = $this->product->productPropertyNames->toArray();
            return view('livewire.product.single-product-livewire',
                ['product' => $this->product, 'productProperty' => $this->productProperty, 'rating' => $this->rating]);
        }
        abort(404);
    }

    public function asQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public $checkbox = [];
    public $select;
    public $checkboxPropertyName;
    public $selectPropertyName;

    protected $rules = [
        'quantity' => 'required|max:2',
        'property' => 'required',
    ];


    public function store()
    {

        // $this->validate($this->rules);

        if (!empty($this->productProperty)) {
            $property = [];
            foreach ($this->productProperty as $pro) {
                if ($pro['type'] == 'checkbox') {
                    $this->checkboxPropertyName = $pro['p_property_name'];
                }
            }
            $checkbox = array_filter($this->checkbox, function ($check) {
                return $check == true;
            });
            foreach (array_keys($checkbox) as $pro) {
                $property[$this->checkboxPropertyName][] = $pro;
            }
            foreach ($this->productProperty as $pro) {
                if ($pro['type'] == 'select') {
                    $this->selectPropertyName = $pro['p_property_name'];
                }
            }
            $property[$this->selectPropertyName][] = $this->select;
        } else {
            $property = null;
        }

        Card::create(
            [
                'pay' => $this->product->pay,
                'product_name' => $this->product->name,
                'quantity' => $this->quantity,
                'properties' => ($property == null) ? null : json_encode($property),
                'image' => $this->product->image,
                'discount_percent' => $this->product->discount_percent,
                'tax_val_percent' => $this->product->tax_val_percent,
                'value_added_tax' => $this->product->value_added_tax,
                'vat_after_discount' => $this->product->vat_after_discount,
                'is_published' => true,
                'product_id' => $this->product->id,
                'currency_type' => $this->product->currency_info['currency_type'],
                'user_id' => auth()->id(),
            ]
        );

        $this->dispatchBrowserEvent('swal', [
            'title' => __('products.added_to_card', ['product_name' => $this->product->name]),
            'timer' => 3000,
            'icon' => 'success',
            'toast' => true,
            'position' => 'top-right'
        ]);

        $this->emit('refreshCard');
    }

    public function submitAddToCard()
    {
        $cardIsExist = Card::where('product_name', $this->product->name)->where('user_id', auth()->id())->first();
        if ($cardIsExist) {
            $this->dispatchBrowserEvent('conform_product_exist_or_not');
            $this->emit('refreshCard');
        } else {
            $this->store();
        }
    }


    public function rating($val)
    {
        if ($val <= 5 && $val >= 1) {
            if (auth()->check()) {
                ProductRating::updateOrCreate(['user_id' => auth()->id(), 'product_id' => $this->product->id]
                    , ['rating' => $val]);
                $this->dispatchBrowserEvent('swal',
                    [
                        'title' => __('Thank you for your rating'),
                        'timer' => 3000,
                        'icon' => 'success',
                        'toast' => true,
                        'position' => 'top-right'
                    ]);
            } else {
                $this->dispatchBrowserEvent('swal',
                    [
                        'title' => __('sorry you mast login | Thank you :)'),
                        'timer' => 3000,
                        'icon' => 'info',
                        'toast' => true,
                        'position' => 'top-right'
                    ]);
            }
        }
    }
}
