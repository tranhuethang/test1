@extends('layouts.staff.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Information Staff
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
                                    <label>Fullname</label>
                                    <input class="form-control" type="text" name="fullname" value="{{ $staff->fullname }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username" value="{{ $staff->username }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" value="{{ $staff->email}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <img src="{{ $staff->avatar }}" style="width:320px; height:320px;">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="10" name="description" readonly>{{ $staff->description }}</textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop