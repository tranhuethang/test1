@extends('layouts.staff.index')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Information Staff Form
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-7">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Infomation</h3>
                        </div>
                        @if (count($errors) >0)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-danger"> {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form role="form" action="{{ route('staff.information.update') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" name="username" value="{{ $info->username }}" >
                                </div>
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <input class="form-control" type="file" name="avatar" placeholder="Avatar">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="10" name="description" >{{ $info->description }}</textarea>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop