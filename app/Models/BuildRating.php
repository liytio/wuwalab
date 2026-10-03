<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuildRating extends Model
{
    protected $fillable = ['build_id', 'user_id', 'score'];

    public function build()
    {
        return $this->belongsTo(Build::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
