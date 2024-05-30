<?php

namespace App\Filament\Zone\Resources\RegionResource\Pages;

use App\Filament\Zone\Resources\RegionResource;
use App\Models\Product;
use App\Models\Region;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\DB;

class ViewLog extends Page
{
    protected static string $resource = RegionResource::class;

    protected static string $view = 'filament.zone.resources.region-resource.pages.view-log';

    public $region;
    public $product;
    public $id;
    public $budget_log;
    public $placement_log;
    public $updateable_placement_amount;
    public $updateable_placement_key;
    public $pog_log;
    public $updateable_pog_amount;
    public $updateable_pog_key;

    public function mount(Region $record, Product $product)
    {
        $data = DB::table('product_region')->where('product_id', $product->id)->where('region_id', $record->id)->first();
        $this->region = $record;
        $this->product = $product;
        $this->id = $product->id;
        $this->budget_log = $data->budget_log ? json_decode($data->budget_log, true) : [];
        $this->placement_log = $data->placement_log ? json_decode($data->placement_log, true) : [];
        $this->pog_log = $data->pog_log ? json_decode($data->pog_log, true) : [];
        if($data->placement_log){
            $placement_log = json_decode($data->placement_log, true);
            foreach($placement_log as $key => $log){
                if(isset($log['added']) && \Carbon\Carbon::parse($log['added'])->addHours(24) > now()){
                    $this->updateable_placement_amount = $log['amount'];
                    $this->updateable_placement_key = $key;
                }
            }
        }
        if($data->pog_log){
            $pog_log = json_decode($data->pog_log, true);
            foreach($pog_log as $key => $log){
                if(isset($log['added']) && \Carbon\Carbon::parse($log['added'])->addHours(24) > now()){
                    $this->updateable_pog_amount = $log['amount'];
                    $this->updateable_pog_key = $key;
                }
            }
        }
    }

    public function getTitle(): string | Htmlable
    {
        return $this->region->name . ' - ' . $this->product->name;
    }

    public function updatePlacementLog()
    {
        $this->placement_log[$this->updateable_placement_key]['amount'] = $this->updateable_placement_amount;
        $this->placement_log[$this->updateable_placement_key]['updated'] = now();
        $placement = 0;
        foreach($this->placement_log as $log){
            $placement += $log['amount'];
        }
        $data['placement'] = $placement;
        $data['placement_log'] = json_encode($this->placement_log);
        $this->region->products()->updateExistingPivot($this->id, $data);
        $this->region->touch();
        $this->region->zone->touch();
        Notification::make()
            ->title('Updated successfully')
            ->success()
            ->send();
        return redirect(RegionResource::getUrl('view', [$this->region]));
    }

    public function updatePogLog()
    {
        $this->pog_log[$this->updateable_pog_key]['amount'] = $this->updateable_pog_amount;
        $this->pog_log[$this->updateable_pog_key]['updated'] = now();
        $pog = 0;
        foreach($this->pog_log as $log){
            $pog += $log['amount'];
        }
        $data['pog'] = $pog;
        $data['pog_log'] = json_encode($this->pog_log);
        $this->region->products()->updateExistingPivot($this->id, $data);
        $this->region->touch();
        $this->region->zone->touch();
        Notification::make()
            ->title('Updated successfully')
            ->success()
            ->send();
        return redirect(RegionResource::getUrl('view', [$this->region]));
    }
}
