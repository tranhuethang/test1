<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddStaffRequest;
use App\Http\Requests\EditStaffRequest;
use App\Models\Staff;
use App\Models\Timesheet;
use App\Services\Interfaces\StaffServiceInterface;

class StaffsController extends Controller
{

    protected $staffService;

    public function __construct(StaffServiceInterface $staffService)
    {
        $this->staffService = $staffService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();

        return view('admin.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = Staff::all();

        return view('admin.staff.add', compact('staff'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddStaffRequest $request)
    {
        if ($this->staffService->createStaff($request->all())) {
            return redirect('admin/staff/list');
        }

        abort(500, 'Whoops ! Something went wrong !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        $data = Staff::all();

        return view('admin.staff.edit', compact('staff', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditStaffRequest $request, Staff $staff)
    {
        if ($this->staffService->updateStaff($request->all(), $staff)) {

            return redirect('admin/staff/list');
        }

        abort(500, 'Whoops ! Something went wrong !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->forceDelete();

        return redirect('admin/staff/list');
    }
}
