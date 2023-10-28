<?php

namespace App\Exports;

use App\Models\Zone;
use Maatwebsite\Excel\Concerns\FromCollection;

class HybridRiceReport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $report[] = [
            'Name',
            'Budget',
            'Placement',
            'POG',
        ];
        $zones = Zone::get();
        $budgetSum = 0;
        $placementSum = 0;
        $pogSum = 0;
        foreach($zones as $zone){
            $budgetSum += $zone->hybridRice()['budget'];
            $placementSum += $zone->hybridRice()['placement'];
            $pogSum += $zone->hybridRice()['pog'];
            foreach($zone->regions as $region){
                $report[] = [
                    $region->name,
                    $region->hybridRice->sum('pivot.budget'),
                    $region->hybridRice->sum('pivot.placement'),
                    $region->hybridRice->sum('pivot.pog'),
                ];
            }
            $report[] = [
                $zone->name,
                $zone->hybridRice()['budget'],
                $zone->hybridRice()['placement'],
                $zone->hybridRice()['pog'],
            ];
        }
        $report[] = [
            'Total',
            $budgetSum,
            $placementSum,
            $pogSum,
        ];

        return collect($report);
    }
}
