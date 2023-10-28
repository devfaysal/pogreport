<?php

namespace App\Exports;

use App\Models\Zone;
use Maatwebsite\Excel\Concerns\FromCollection;

class InbredRiceReport implements FromCollection
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
            $budgetSum += $zone->inbredRice()['budget'];
            $placementSum += $zone->inbredRice()['placement'];
            $pogSum += $zone->inbredRice()['pog'];
            foreach ($zone->regions as $region) {
                $report[] = [
                    $region->name,
                    $region->inbredRice->sum('pivot.budget'),
                    $region->inbredRice->sum('pivot.placement'),
                    $region->inbredRice->sum('pivot.pog'),
                ];
            }
            $report[] = [
                $zone->name,
                $zone->inbredRice()['budget'],
                $zone->inbredRice()['placement'],
                $zone->inbredRice()['pog'],
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
