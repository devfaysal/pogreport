<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zone extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    public function regions(): HasMany
    {
        return $this->hasMany(Region::class);
    }

    public function getHybridRiceAttribute()
    {
        return $this->hybridRice();
    }

    public function hybridRice()
    {
        $report = [
            'budget' => 0,
            'placement' => 0,
            'pog' => 0,
        ];
        foreach($this->regions as $region){
            $report['budget'] += $region->hybridRice->sum('pivot.budget');
            $report['placement'] += $region->hybridRice->sum('pivot.placement');
            $report['pog'] += $region->hybridRice->sum('pivot.pog');
        }
        return $report;
    }

    public function inbredRice()
    {
        $report = [
            'budget' => 0,
            'placement' => 0,
            'pog' => 0,
        ];
        foreach ($this->regions as $region) {
            $report['budget'] += $region->inbredRice->sum('pivot.budget');
            $report['placement'] += $region->inbredRice->sum('pivot.placement');
            $report['pog'] += $region->inbredRice->sum('pivot.pog');
        }
        return $report;
    }

    public function hybridMaize()
    {
        $report = [
            'budget' => 0,
            'placement' => 0,
            'pog' => 0,
        ];
        foreach ($this->regions as $region) {
            $report['budget'] += $region->hybridMaize->sum('pivot.budget');
            $report['placement'] += $region->hybridMaize->sum('pivot.placement');
            $report['pog'] += $region->hybridMaize->sum('pivot.pog');
        }
        return $report;
    }
}
