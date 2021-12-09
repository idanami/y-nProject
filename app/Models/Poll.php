<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $table = 'polls';

    public function options()
    {
        return $this->belongsToMany(Option::class,'option_polls', 'polls_id', 'option_id')->withPivot('votes')->withTimestamps();;
    }
}

