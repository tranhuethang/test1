<?php

namespace App\Http\Controllers\Staff;

use App\Models\Statistic;
use Auth;

class StatisticsController extends Controller
{
    public function index()
    {
        $staff_id = Auth::guard('staffs')->user()->id;
        $statistic = Statistic::where('staff_id', $staff_id)->first();

        return view('staff.statistic.index', compact('statistic'));
    }
}
