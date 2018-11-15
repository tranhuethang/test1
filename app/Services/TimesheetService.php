<?php

namespace App\Services;

use App\Models\Timesheet;
use App\Models\Statistic;
use App\Services\Interfaces\TimesheetServiceInterface;
use Auth;

class TimesheetService implements TimesheetServiceInterface
{
    /**
     * @param array $data
     * @return mixed
     *
     */
    public function createTimesheet(array $data)
    {
        return \DB::transaction(function () use ($data)
        {
            $timesheet = new Timesheet($data);
            $timesheet->staff_id = Auth::guard('staffs')->user()->id;
            $timesheet->approve = 0;
            $timesheet->save();
            if ($timesheet->save()) {
                $statistic = Statistic::where('staff_id', $timesheet['staff_id'])->first();
                if (isset($statistic)) {
                    $statistic['total_count'] += 1;
                    $statistic->update();
                } else {
                    $statistics = new Statistic();
                    $statistics->staff_id = Auth::guard('staffs')->user()->id;
                    $statistics->total_count = 1;
                    $statistics->save();
                }
            }

            return $data;
        });
    }

    public function updateTimesheet(array $data, Timesheet $timesheet)
    {
        return \DB::transaction(function () use ( $data, $timesheet)
        {
            $timesheet->update($data);

            return $data;
        });
    }

    public function updateApproveTimesheet(array $data, Timesheet $timesheets)
    {
        return \DB::transaction(function () use ($data, $timesheets)
        {
            $timesheets->update($data);

            return $data;
        });
    }
}