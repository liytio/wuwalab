<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    use HasFactory;

    public const STATUS_DRAFT = 'draft';
    public const STATUS_PUBLISHED = 'published';
    public const STATUS_ARCHIVED = 'archived';

    // Perpindahan status yang diizinkan: status asal => daftar status tujuan
    public const TRANSITIONS = [
        self::STATUS_DRAFT => [self::STATUS_PUBLISHED],
        self::STATUS_PUBLISHED => [self::STATUS_DRAFT, self::STATUS_ARCHIVED],
        self::STATUS_ARCHIVED => [self::STATUS_DRAFT],
    ];

    protected $fillable = [
        'resonator_id',
        'title',
        'level',
        'sequence',
        'weapon_name',
        'echo_costs',
        'notes',
    ];

    protected $casts = [
        'echo_costs' => 'array',
        'level' => 'integer',
        'sequence' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resonator()
    {
        return $this->belongsTo(Resonator::class);
    }

    public function ratings()
    {
        return $this->hasMany(BuildRating::class);
    }

    public function canTransitionTo(string $status): bool
    {
        return in_array($status, self::TRANSITIONS[$this->status] ?? [], true);
    }

    // Build hanya boleh diedit selama masih draft
    public function isEditable(): bool
    {
        return $this->status === self::STATUS_DRAFT;
    }

    public function totalEchoCost(): int
    {
        return array_sum($this->echo_costs ?? []);
    }
}
