<?php

namespace App\Livewire;

use App\Models\Waste;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WasteForm extends Component
{
    public $wasteType;
    public $quantity;
    public $location;
    public $startingPrice;
    public $characteristics;
    public $notes;

    public function saveWaste()
    {
        $this->validate([
            'wasteType' => 'required|string',
            'quantity' => 'required|numeric',
            'location' => 'required|string',
            'startingPrice' => 'required|numeric',
            'characteristics' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        Waste::create([
            'waste_type' => $this->wasteType,
            'quantity' => $this->quantity,
            'location' => $this->location,
            'starting_price' => $this->startingPrice,
            'characteristics' => $this->characteristics,
            'notes' => $this->notes,
            'supplier_id' => Auth::user()->id,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.waste-form');
    }
}
