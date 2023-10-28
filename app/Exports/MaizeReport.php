<?php

namespace App\Exports;

use App\Models\Zone;
use Maatwebsite\Excel\Concerns\FromCollection;

class MaizeReport implements FromCollection
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
        foreach ($zones as $zone) {
            $budgetSum += $zone->hybridMaize()['budget'];
            $placementSum += $zone->hybridMaize()['placement'];
            $pogSum += $zone->hybridMaize()['pog'];
            foreach ($zone->regions as $region) {
                $report[] = [
                    $region->name,
                    $region->hybridMaize->sum('pivot.budget'),
                    $region->hybridMaize->sum('pivot.placement'),
                    $region->hybridMaize->sum('pivot.pog'),
                ];
            }
            $report[] = [
                $zone->name,
                $zone->hybridMaize()['budget'],
                $zone->hybridMaize()['placement'],
                $zone->hybridMaize()['pog'],
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
