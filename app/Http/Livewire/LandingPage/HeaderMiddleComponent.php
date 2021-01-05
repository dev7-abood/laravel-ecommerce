<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class HeaderMiddleComponent extends Component
{

    public $cardCount = 0;
    public $favoriteCount = 0;

    protected $listeners = ['refreshCard' => '$refresh' , 'refreshFavorite' => '$refresh'];

    public function processingData()
    {
        if (auth()->check()) {
            $this->cardCount     = auth()->user()->cards()->where('is_published', true)->count();
            $this->favoriteCount =  auth()->user()->productFavorites()->count();
        }
    }

    public function render()
    {
        $this->processingData();
        return view('livewire.landing-page.header-middle-component',
            ['cardCount' => $this->cardCount, 'favoriteCount' => $this->favoriteCount]
        );
    }
}
