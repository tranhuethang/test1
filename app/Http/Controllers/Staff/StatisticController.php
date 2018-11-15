<?php

namespace App\Http\Controllers\Staff;

use App\Models\Statistics;
use Auth;

class StatisticController extends Controller
{
    public function index()
    {
        $staff_id = Auth::guard('staffs')->user()->id;
        $statistic = Statistics::where('staff_id', $staff_id)->first();

        return view('staff.statistic.index', compact('statistic'));
    }
}
