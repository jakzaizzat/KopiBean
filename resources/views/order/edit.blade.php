@extends('master')
@section('title', 'Create Order')


@section('content')

<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif

               <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Submit a new order</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Customer ID</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="customerID" value="{!! $order->customerid !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Table No</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="title" placeholder="Table No" name="tableNo" value="{!! $order->tableno !!}">
                        </div>
                    </div>
                    

                    <div class="form-group">
                      <label for="select111" class="col-md-2 control-label">Coffee ID</label>

                      <div class="col-md-10">
                        <select id="select111" class="form-control" name="coffeeID" value="{!! $order->coffeeid !!}">
                          <option>Latte1</option>
                          <option>Latte2</option>
                          <option>Latte3</option>
                          <option>Latte4</option>
                          <option>Latte5</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Quantity Coffee</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="title" placeholder="Title" name="coffeeNo" value="{!! $order->coffeeno !!}">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="select111" class="col-md-2 control-label">Pastry ID</label>

                      <div class="col-md-10">
                        <select id="select111" class="form-control" name="pastryID" value="{!! $order->pastryid !!}">
                          <option>Donut1</option>
                          <option>Donut2</option>
                          <option>Donut3</option>
                          <option>Donut4</option>
                          <option>Donut5</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Quantity Pastry</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="title" placeholder="Title" name="pastryNo" value="{!! $order->pastryno !!}">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>


@endsection