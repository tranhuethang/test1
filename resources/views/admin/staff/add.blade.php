@extends('layouts.admin.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Add Staff
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Staff Form</h3>
                        </div>
                        @if (count($errors) >0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger"> {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form role="form" action="{{ route('admin.staff.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input class="form-control" name="fullname" placeholder="Fullname">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" >
                                </div>
                                <div class="form-group">
                                        <label>Avatar</label>
                                        <input class="form-control" type="file" name="avatar" placeholder="Avatar">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="5" placeholder="Description" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Leader</label>
                                    <select name="leader_id">
                                            @foreach ($staff as $s)
                                                <option value="{{ $s->id }}">{{ $s->username }}</option>
                                                @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Notify To</label>
                                    <input type="text" class="form-control" name="notify_to" placeholder="Notify To" >
                                </div>
                            </div>
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