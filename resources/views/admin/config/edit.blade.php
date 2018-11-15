@extends('layouts.admin.index')
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
                        <form role="form" action="{{ route('admin.config.update', $config->id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Start Timesheet</label>
                                    <input class="form-control" name="start_time" value="{{ $config->start_time }}">
                                </div>
                                <div class="form-group">
                                    <label>End Timesheet</label>
                                    <input class="form-control" name="check_time" value="{{ $config->check_time }}">
                                </div>
                            </div>
                            <div class="reset-button">
                                <button type="reset" class="btn btn-warning">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop