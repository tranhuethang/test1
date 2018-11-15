<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddStaffRequest;
use App\Http\Requests\EditStaffRequest;
use App\Models\Staffs;
use App\Services\Interfaces\StaffServiceInterface;

class StaffController extends Controller
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
        $staff = Staffs::all();

        return view('admin.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = Staffs::all();

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
        if ($this->staffService->createStaff($request->all()))
        {
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
    public function edit($id)
    {
        $staff = Staffs::find($id);
        $data = Staffs::all();

        return view('admin.staff.edit', compact('staff', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditStaffRequest $request, Staffs $id)
    {
        if ($this->staffService->updateStaff($request->all(), $id))
        {
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
    public function destroy($id)
    {
        $data = Staffs::find($id);
        $data->delete();

        return redirect('admin/staff/list');
    }
}
