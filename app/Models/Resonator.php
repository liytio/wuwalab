<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resonator extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function builds()
    {
        return $this->hasMany(Build::class);
    }

    // Filter daftar resonator berdasarkan nama, elemen, tipe senjata, dan rarity
    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query
            ->when($filters['q'] ?? null, fn ($q, $name) => $q->where('name', 'like', '%' . $name . '%'))
            ->when($filters['element'] ?? null, fn ($q, $element) => $q->where('element', $element))
            ->when($filters['weapon_type'] ?? null, fn ($q, $weapon) => $q->where('weapon_type', $weapon))
            ->when($filters['rarity'] ?? null, fn ($q, $rarity) => $q->where('rarity', $rarity));
    }
}
