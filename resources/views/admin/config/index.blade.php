@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Config Table
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Config</h3>
                        </div>
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Start Timesheet</th>
                                    <th>Check Timesheet</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($config as $item)
                                        <tr>
                                            <td>{{ $item['start_time'] }}</td>
                                            <td>{{ $item['check_time'] }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('admin.config.edit', $item) }}">Edit</a>
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