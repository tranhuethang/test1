<?php

namespace App\Http\Controllers\Staff;

use App\Http\Requests\InformationStaffRequest;
use App\Http\Requests\PasswordRequest;
use App\Services\Interfaces\InformationServiceInterface;
use Illuminate\Http\Request;
use Auth;

class InformationsController extends Controller
{

    protected $informationService;

    public function __construct(InformationServiceInterface $informationService)
    {
        $this->informationService = $informationService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Auth::guard('staffs')->user();

        return view('staff.information.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $info = Auth::guard('staffs')->user();

        return view('staff.information.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InformationStaffRequest $request)
    {
        if ($this->informationService->updateInfo($request->all())) {
            return redirect('staff/information');
        }

        abort(500, 'Whoops ! Something went wrong !');
    }

    public function getResetPassword()
    {
        return view('staff.auth.resetpass');
    }

    public function postResetPassword(PasswordRequest $request)
    {
        $staff = Auth::guard('staffs')->user();
        $staff->password = $request->password;
        $staff->save();

        return redirect('staff/information');
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
