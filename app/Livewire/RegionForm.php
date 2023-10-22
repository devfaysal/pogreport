<?php

namespace App\Livewire;

use App\Models\Region;
use Filament\Notifications\Notification;
use Illuminate\Support\Carbon;
use Livewire\Component;

class RegionForm extends Component
{
    public Region $region;
    public $product;
    public $id;
    public $type;
    public $pog;
    public $budget;
    public $budget_log;
    public $updated_at;

    public function mount(Region $region, $product)
    {
        // dd($product);
        $this->region = $region;
        $this->product = $product;
        $this->id = $product->id;
        $this->type = $product->pivot->type;
        $this->budget = $product->pivot->budget;
        $this->budget_log = $product->pivot->budget_log ? json_decode($product->pivot->budget_log, true) : [];
    }
    
    public function render()
    {
        return view('livewire.region-form');
    }

    public function updateProduct()
    {
        $data = [];
        if ($this->budget > 0) {
            $this->budget_log[] = ['added' => now(), 'amount' => $this->budget];
            $data['budget'] = $this->budget;
            $data['budget_log'] = json_encode($this->budget_log);
        }
        if (!empty($data)) {
            $this->region->products()->updateExistingPivot($this->id, $data);
            Notification::make()
                ->title('Updated successfully')
                ->success()
                ->send();
        }
    }
}
