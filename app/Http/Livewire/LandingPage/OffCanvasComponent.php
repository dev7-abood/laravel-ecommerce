<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;
use App\Models\Card;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OffCanvasComponent extends Component
{
    use AuthorizesRequests;

    protected $listeners = ['refreshCard' => '$refresh', 'refreshFavorite' => '$refresh'];

    public $cards = [];

    public $productFavorites = [];

    public function processingData(){
        if (auth()->check())
        {
            $this->cards = auth()->user()->cards()
                ->where('is_published', true)
                ->orderBy('id', 'DESC')
                ->get();

            $this->productFavorites = auth()->user()
                ->productFavorites()->orderBy('id', 'DESC')->get();
        }
    }

    public function render()
    {
        $this->processingData();
        return view('livewire.landing-page.off-canvas-component',
            ['cards' => $this->cards, 'productFavorites' => $this->productFavorites]
        );
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
