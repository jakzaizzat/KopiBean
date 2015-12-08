@extends('master')
@section('title', 'Admin Dashboard')


@section('content')
    
    <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{!! $ordersTotal !!}</h3>
                  <p>Orders</p>
                </div>
                <div class="icon">
                  <i class="fa fa-cart-plus"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{!! $rate !!}<sup style="font-size: 20px">%</sup></h3>
                  <p>Profit Margin</p>
                </div>
                <div class="icon">
                  <i class="fa fa-line-chart"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{!! $usersTotal !!}</h3>
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><span>RM</span>{!! $sum !!}</h3>
                  <p>Total Sales</p>
                </div>
                <div class="icon">
                  <i class="fa fa-money"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-12 connectedSortable">

              <!-- solid sales graph -->
              <div class="box box-solid bg-teal-gradient">
                <div class="box-header">
                  <i class="fa fa-th"></i>
                  <h3 class="box-title">Sales Order</h3>
                </div>
                <div class="box-body border-radius-none">
                  <div class="chart" id="line-chart" style="height: 250px;"></div>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->


            </section><!-- right col -->
	
@endsection