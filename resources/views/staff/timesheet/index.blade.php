@extends('layouts.staff.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                List Timesheet Table
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List Timesheet</h3>
                        </div>
                        <div>
                            <a class="btn btn-add" href="{{ route('staff.timesheet.create') }}"> <i
                                        class="fa fa-plus"></i> Add Timesheet
                            </a>
                        </div>
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Work</th>
                                    <th>Staff</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($timesheet as $item)
                                    <tr>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->work }}
                                        <td>
                                            <?php $val = $item->load(['staff']); ?>
                                            {{ $val->staff()->first()->fullname }}
                                        </td>
                                        <td>
                                            @if (Auth::guard('staffs')->user()->id == $item['staff_id'])
                                            <a class="btn btn-info btn-sm" href="{{ route('staff.timesheet.edit', $item->id) }}">Edit</a>
                                            @endif
                                            <a class="btn btn-danger btn-sm" href="{{ route('staff.timesheet.show', $item->id) }}">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop