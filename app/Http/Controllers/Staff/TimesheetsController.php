<?php

namespace App\Http\Controllers\Staff;

use App\Http\Requests\AddTimesheetRequest;
use App\Http\Requests\UpdateTimesheetRequest;
use App\Models\Timesheet;
use App\Services\Interfaces\TimesheetServiceInterface;
use Illuminate\Http\Request;

class TimesheetsController extends Controller
{

    protected $timesheetService;

    public function __construct(TimesheetServiceInterface $timesheetService)
    {

        $this->timesheetService = $timesheetService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timesheet = Timesheet::all();

        return view('staff.timesheet.index', compact('timesheet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.timesheet.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddTimesheetRequest $request)
    {
        if ($this->timesheetService->createTimesheet($request->all())) {

            return redirect('staff/timesheet/list');
        }

        abort(500, 'Whoops ! Something went wrong !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Timesheet $timesheet)
    {
        $timesheet->load('staff');

        return view('staff.timesheet.detail', compact('timesheet'));
    }

    public function detail(Request $request, Timesheet $timesheet)
    {
        if ($this->timesheetService->updateApproveTimesheet($request->all(), $timesheet)) {

            return redirect('staff/timesheet/list');
        }

        abort(500, 'Whoops ! Something went wrong !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Timesheet $timesheet)
    {
        return view('staff.timesheet.edit', compact('timesheet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTimesheetRequest $request,Timesheet $timesheet)
    {
        if ($this->timesheetService->updateTimesheet($request->all(), $timesheet)) {
            return redirect('staff/timesheet/list');
        }

        abort(500, 'Whoops ! Something went wrong !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
