<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Zone extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $guarded = [];

    public function regions(): HasMany
    {
        return $this->hasMany(Region::class);
    }

    public function getHybridRiceBudgetAttribute()
    {
        return $this->hybridRice()['budget'];
    }

    public function getHybridRicePlacementAttribute()
    {
        return $this->hybridRice()['placement'];
    }

    public function getHybridRicePogAttribute()
    {
        return $this->hybridRice()['pog'];
    }

    public function getInbredRiceBudgetAttribute()
    {
        return $this->inbredRice()['budget'];
    }

    public function getInbredRicePlacementAttribute()
    {
        return $this->inbredRice()['placement'];
    }

    public function getInbredRicePogAttribute()
    {
        return $this->inbredRice()['pog'];
    }

    public function getHybridMaizeBudgetAttribute()
    {
        return $this->hybridMaize()['budget'];
    }

    public function getHybridMaizePlacementAttribute()
    {
        return $this->hybridMaize()['placement'];
    }

    public function getHybridMaizePogAttribute()
    {
        return $this->hybridMaize()['pog'];
    }

    public function getBudgetSumAttribute()
    {
        return $this->hybridRice()['budget'] + $this->inbredRice()['budget'] + $this->hybridMaize()['budget'];
    }

    public function getPlacementSumAttribute()
    {
        return $this->hybridRice()['placement'] + $this->inbredRice()['placement'] + $this->hybridMaize()['placement'];
    }

    public function getPogSumAttribute()
    {
        return $this->hybridRice()['pog'] + $this->inbredRice()['pog'] + $this->hybridMaize()['pog'];
    }

    public function hybridRice()
    {
        $report = [
            'budget' => 0,
            'placement' => 0,
            'pog' => 0,
        ];
        foreach ($this->regions as $region) {
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
