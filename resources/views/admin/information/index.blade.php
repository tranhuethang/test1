@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Information Admin
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
                                    <input class="form-control" type="text" name="fullname" value="{{ $admin->fullname }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username" value="{{ $admin->username }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" value="{{ $admin->email}}" readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop