<?php

namespace App\Livewire;

use App\Models\Region;
use Livewire\Component;

class ProductForm extends Component
{
    public Region $region;
    public $product;
    public $id;
    public $type;
    public $pog;
    public $budget;
    public $placement;
    public $todays_pog;

    public function mount(Region $region, $product)
    {
        // dd($product);
        $this->region = $region;
        $this->product = $product;
        $this->id = $product->id;
        $this->type = $product->pivot->type;
        $this->budget = $product->pivot->budget;
        $this->placement = $product->pivot->placement;
        $this->pog = $product->pivot->pog;
    }

    public function render()
    {
        return view('livewire.product-form');
    }

    public function updateProduct()
    {
        $this->pog = $this->pog + $this->todays_pog;
        $this->region->products()->updateExistingPivot($this->id, ['pog' => $this->pog]);
        $this->todays_pog = '';
    }
}
