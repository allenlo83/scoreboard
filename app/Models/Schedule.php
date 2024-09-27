<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Schedule extends Model
{
    protected $fillable = [
        'season',
        'date',
        'country',
        'winner',
    ];

    public $timestamps = true;

}