@extends('layouts.admin')
@section('content')
<!-- top tiles -->
<div class="row" style="display:inline-block;">
    <div class="tile_count">
        <div class="col-md-3 col-sm-6  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
            <div class="count">2,500</div>
        </div>
        <div class="col-md-3 col-sm-6  tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
            <div class="count">1,235</div>
        </div>
        <div class="col-md-3 col-sm-6  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
            <div class="count green">2,500</div>
        </div>
        <div class="col-md-3 col-sm-6  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
            <div class="count">4,567</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="dashboard_graph">

            <div class="row x_title">
                <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                </div>
                <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div id="chart_plot_01" class="demo-placeholder"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
