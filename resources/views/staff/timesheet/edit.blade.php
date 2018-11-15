@extends('layouts.staff.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Edit Timesheet
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Timesheet Form</h3>
                        </div>
                        @if (count($errors) >0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger"> {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if (session('status'))
                            <ul>
                                <li class="text-danger"> {{ session('status') }}</li>
                            </ul>
                        @endif
                        <form role="form" action="{{ route('staff.timesheet.update', $timesheet->id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input class="form-control" type="date" name="date" value="{{ $timesheet->date }}">
                                </div>
                                <div class="form-group">
                                    <label>Work</label>
                                    <textarea class="form-control" rows="5" name="work">{{ $timesheet->work }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Problem</label>
                                    <textarea class="form-control" rows="5" name="problem">{{ $timesheet->problem }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Plan</label>
                                    <textarea class="form-control" rows="5" name="plan">{{ $timesheet->plan }}</textarea>
                                </div>
                            </div>
                            <input type="hidden" name="approve" value="0">
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop