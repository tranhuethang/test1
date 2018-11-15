@extends('layouts.admin.index')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="col-lg-7 connectedSortable">
                <div class="box box-success">
                    <div class="box-header">
                        <i class="fa fa-comments-o"></i>

                        <h3 class="box-title">Chat</h3>

                        <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                            <div class="btn-group" data-toggle="btn-toggle">
                                <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="box-body chat" id="chat-box">
                        <div class="item">
                            <img src="{!! asset('img/user1-128x128.jpg') !!}" alt="user image" class="online">

                            <p class="message">
                                <a href="#" class="name">
                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                                    Mike Doe
                                </a>
                                I would like to meet you to discuss the latest news about
                                the arrival of the new theme. They say it is going to be one the
                                best themes on the market
                            </p>
                        </div>
                        <div class="item">
                            <img src="{!! asset('img/user2-160x160.jpg') !!}" alt="user image" class="offline">

                            <p class="message">
                                <a href="#" class="name">
                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                                    Alexander Pierce
                                </a>
                                I would like to meet you to discuss the latest news about
                                the arrival of the new theme. They say it is going to be one the
                                best themes on the market
                            </p>
                        </div>
                        <div class="item">
                            <img src="{!! asset('img/user7-128x128.jpg') !!}" alt="user image" class="offline">

                            <p class="message">
                                <a href="#" class="name">
                                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                                    Susan Doe
                                </a>
                                I would like to meet you to discuss the latest news about
                                the arrival of the new theme. They say it is going to be one the
                                best themes on the market
                            </p>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="input-group">
                            <input class="form-control" placeholder="Type message...">

                            <div class="input-group-btn">
                                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="ion ion-clipboard"></i>

                        <h3 class="box-title">To Do List</h3>

                        <div class="box-tools pull-right">
                            <ul class="pagination pagination-sm inline">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="todo-list">
                            <li>
                                <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <input type="checkbox" value="">
                                <span class="text">Design a nice theme</span>
                                <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <input type="checkbox" value="">
                                <span class="text">Make the theme responsive</span>
                                <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <input type="checkbox" value="">
                                <span class="text">Let theme shine like a star</span>
                                <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <input type="checkbox" value="">
                                <span class="text">Let theme shine like a star</span>
                                <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <input type="checkbox" value="">
                                <span class="text">Check your messages and notifications</span>
                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <input type="checkbox" value="">
                                <span class="text">Let theme shine like a star</span>
                                <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                                <div class="tools">
                                    <i class="fa fa-edit"></i>
                                    <i class="fa fa-trash-o"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box-footer clearfix no-border">
                        <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                    </div>
                </div>
            </section>
            <section class="col-lg-5 connectedSortable">
                <div class="box box-solid bg-light-blue-gradient">
                    <div class="box-header">
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                                    title="Date range">
                                <i class="fa fa-calendar"></i></button>
                            <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                                    data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                                <i class="fa fa-minus"></i></button>
                        </div>
                        <i class="fa fa-map-marker"></i>

                        <h3 class="box-title">
                            Visitors
                        </h3>
                    </div>
                    <div class="box-body">
                        <div id="world-map" style="height: 250px; width: 100%;"></div>
                    </div>
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <div id="sparkline-1"></div>
                                <div class="knob-label">Visitors</div>
                            </div>
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <div id="sparkline-2"></div>
                                <div class="knob-label">Online</div>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div id="sparkline-3"></div>
                                <div class="knob-label">Exists</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-solid bg-teal-gradient">
                    <div class="box-header">
                        <i class="fa fa-th"></i>

                        <h3 class="box-title">Sales Graph</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body border-radius-none">
                        <div class="chart" id="line-chart" style="height: 250px;"></div>
                    </div>
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                                       data-fgColor="#39CCCC">
                                <div class="knob-label">Mail-Orders</div>
                            </div>
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                                       data-fgColor="#39CCCC">

                                <div class="knob-label">Online</div>
                            </div>
                            <div class="col-xs-4 text-center">
                                <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                                       data-fgColor="#39CCCC">

                                <div class="knob-label">In-Store</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
@endsection