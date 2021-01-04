<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;
use App\Models\Card;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OffCanvasComponent extends Component
{

    protected $listeners = ['refreshCard' => '$refresh'];

    use AuthorizesRequests;

    public $cards;

    public function render()
    {
        if (auth()->check()) {
            $this->cards = auth()->user()->cards()
                ->where('is_published', true)
                ->orderBy('id', 'DESC')
                ->get(['id' ,'product_name', 'after_discount','quantity', 'image']);
        }else {
            $this->cards = [];
        }
        return view('livewire.landing-page.off-canvas-component', ['cards' => $this->cards]);
    }


    public function deleteCard(Card $card)
    {
        $this->authorize('delete', $card);
        Card::destroy($card->id);
        $this->emit('refreshCard');

        $this->dispatchBrowserEvent('swal', [
            'title' => __('The product is deleted from the card list.'),
            'timer'=>3000,
            'icon'=>'success',
            'toast'=>true,
            'position'=>'top-right'
        ]);
    }
}
