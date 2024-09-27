<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $failDesc ="Get schedules failed";
        $successDesc = "Get schedules successful";

        $schedules = Schedule::get();

        return $this->success($schedules, $successDesc, 200);

    }

}
