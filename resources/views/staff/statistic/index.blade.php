@extends('layouts.staff.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Statistic for Staff
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-7">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Detail Infomation</h3>
                        </div>
                        <form role="form">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Total Created Timesheet</label>
                                    <input class="form-control" type="text" name="total_count" value="{{ $statistic->total_count }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Total Times Created Timesheeet Late</label>
                                    <input class="form-control" type="text" name="late_count" value="" readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop