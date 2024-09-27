<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Standing extends Model
{
    protected $fillable = [
        'rank',
        'team',
        'wins',
        'podiums',
    ];

    public $timestamps = true;

}