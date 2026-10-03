<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    // Batas jumlah tim yang boleh dimiliki satu user
    public const MAX_PER_USER = 10;

    protected $fillable = ['name', 'member1_id', 'member2_id', 'member3_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function member1()
    {
        return $this->belongsTo(Resonator::class, 'member1_id');
    }

    public function member2()
    {
        return $this->belongsTo(Resonator::class, 'member2_id');
    }

    public function member3()
    {
        return $this->belongsTo(Resonator::class, 'member3_id');
    }

    public function members()
    {
        return collect([$this->member1, $this->member2, $this->member3]);
    }
}
