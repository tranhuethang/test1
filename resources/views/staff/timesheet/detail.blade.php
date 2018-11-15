@extends('layouts.staff.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Detail Timesheet
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Detail Timesheet</h3>
                        </div>
                        <form role="form" action="{{ route('staff.timesheet.detail', $timesheet->id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input class="form-control" type="date" name="date" value="{{ $timesheet->date }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Work</label>
                                    <textarea class="form-control" rows="10" name="work" readonly>{{ $timesheet->work }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Staff</label>
                                    <input class="form-control" value="{{ $timesheet->staff()->first()->fullname }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Problem</label>
                                    <textarea class="form-control" rows="10" name="problem" readonly>{{ $timesheet->problem }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Plan</label>
                                    <textarea class="form-control" rows="10" name="plan" readonly>{{ $timesheet->plan }}</textarea>
                                </div>
                                @if (Auth::guard('staffs')->user()->id == $timesheet->staff()->first()->leader_id)
                                <div class="form-group">
                                    <label>Approve</label>
                                    <select name="approve">
                                            <option value="0" @if ($timesheet->approve == 0 ) selected @endif>Not Approve</option>
                                            <option value="1" @if ($timesheet->approve == 1) selected @endif>Approve</option>
                                    </select>
                                </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop