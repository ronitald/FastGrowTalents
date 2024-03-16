<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowOffers extends Component
{
    public $offers;
    public $selectedOffer;

    public function mount()
    {
        $this->offers = Offer::all();
    }

    public function selectOffer($offerId)
    {
        $this->selectedOffer = Offer::find($offerId);
    }

    public function render()
    {
        $user = Auth::user();

        return view('livewire.show-offers', ['user' => $user, 'offer' => $this->selectedOffer]);
    }
}
