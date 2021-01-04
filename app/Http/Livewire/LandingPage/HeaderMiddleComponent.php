<?php

namespace App\Http\Livewire\LandingPage;

use Livewire\Component;

class HeaderMiddleComponent extends Component
{

    public $cardCount;

    protected $listeners = ['refreshCard' => '$refresh'];

    public function render()
    {
        if (auth()->check()) {
            $this->cardCount = auth()->user()->cards()->where('is_published', true)->count();
        } else{
          $this->cardCount = 0;
      }

        return view('livewire.landing-page.header-middle-component', ['cardCount' => $this->cardCount]);
    }
}
