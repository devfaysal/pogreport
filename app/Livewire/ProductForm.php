<?php

namespace App\Livewire;

use App\Models\Region;
use Filament\Notifications\Notification;
use Illuminate\Support\Carbon;
use Livewire\Component;

class ProductForm extends Component
{
    public Region $region;
    public $product;
    public $id;
    public $type;
    public int $pog;
    public int $budget;
    public int $placement;
    public ?int $add_placement = null;
    public ?int $add_pog = null;
    public $budget_log;
    public $placement_log;
    public $pog_log;
    public $updated_at;

    public function mount(Region $region, $product)
    {
        $this->region = $region;
        $this->product = $product;
        $this->id = $product->id;
        $this->type = $product->pivot->type;
        $this->budget = $product->pivot->budget ?? 0;
        $this->placement = $product->pivot->placement ?? 0;
        $this->pog = $product->pivot->pog ?? 0;
        $this->budget_log = $product->pivot->budget_log ? json_decode($product->pivot->budget_log, true) : [];
        $this->placement_log = $product->pivot->placement_log ? json_decode($product->pivot->placement_log, true) : [];
        $this->pog_log = $product->pivot->pog_log ? json_decode($product->pivot->pog_log, true) : [];
    }

    public function render()
    {
        return view('livewire.product-form');
    }

    public function updateProduct()
    {
        $data = [];
        if ($this->add_placement > 0) {
            $this->placement = $this->placement + $this->add_placement;
            $this->placement_log[] = ['added' => now(), 'amount' => $this->add_placement];
            $data['placement'] = $this->placement;
            $data['placement_log'] = json_encode($this->placement_log);
        }
        if ($this->add_pog > 0) {
            $this->pog = $this->pog + $this->add_pog;
            $this->pog_log[] = ['added' => now(), 'amount' => $this->add_pog];
            $data['pog'] = $this->pog;
            $data['pog_log'] = json_encode($this->pog_log);
        }

        if(!empty($data)){
            $this->region->products()->updateExistingPivot($this->id, $data);
            Notification::make()
                ->title('Saved successfully')
                ->success()
                ->send();
        }
        $this->add_placement = null;
        $this->add_pog = null;
    }
}
