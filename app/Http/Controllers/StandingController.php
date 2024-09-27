<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Standing;

class StandingController extends Controller
{
    public function index(Request $request)
    {
        $failDesc ="Get standings failed";
        $successDesc = "Get standings successful";

        $standings = Standing::get();

        return $this->success($standings, $successDesc, 200);

    }

}
