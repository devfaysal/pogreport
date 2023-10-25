<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Region extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products():BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('type', 'budget', 'placement', 'pog', 'budget_log', 'placement_log', 'pog_log')->withTimestamps();
    }

    public function zone():BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }

    public function hybridRice()
    {
        return $this->belongsToMany(Product::class)
            ->wherePivot('type', 'Hybrid Rice')
            ->withPivot('type', 'budget', 'placement', 'pog', 'budget_log', 'placement_log', 'pog_log')
            ->withTimestamps();
    }

    public function inbredRice()
    {
        return $this->belongsToMany(Product::class)
            ->wherePivot('type', 'Inbred Rice')
            ->withPivot('type', 'budget', 'placement', 'pog', 'budget_log', 'placement_log', 'pog_log')
            ->withTimestamps();
    }

    public function hybridMaize()
    {
        return $this->belongsToMany(Product::class)
            ->wherePivot('type', 'Hybrid Maize')
            ->withPivot('type', 'budget', 'placement', 'pog', 'budget_log', 'placement_log', 'pog_log')
            ->withTimestamps();
    }
}
