<?php

namespace App\Services;

use App\Models\Timesheets;
use App\Models\Statistics;
use App\Services\Interfaces\TimesheetServiceInterface;
use Auth;

class TimesheetService implements TimesheetServiceInterface
{
    public function createTimesheet(array $data)
    {
        return \DB::transaction(function () use ($data)
        {
            $timesheet = new Timesheets($data);
            $timesheet->staff_id = Auth::guard('staffs')->user()->id;
            $timesheet->approve = 0;
            $timesheet->save();
            if ($timesheet->save()){
                $statistic = Statistics::where('staff_id', $timesheet['staff_id'])->first();
                if(isset($statistic)){
                    $statistic['total_count'] += 1;
                    $statistic->update();
                }else{
                    $statistics = new Statistics();
                    $statistics->staff_id = Auth::guard('staffs')->user()->id;
                    $statistics->total_count = 1;
                    $statistics->save();
                }
            }

            return $data;
        });
    }

    public function updateTimesheet(array $data, Timesheets $timesheet)
    {
        return \DB::transaction(function () use ( $data, $timesheet)
        {
            $timesheet->update($data);

            return $data;
        });
    }

    public function updateApproveTimesheet(array $data, Timesheets $timesheets)
    {
        return \DB::transaction(function () use ($data, $timesheets)
        {
            $timesheets->update($data);

            return $data;
        });
    }
}