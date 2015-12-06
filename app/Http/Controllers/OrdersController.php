<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Order;
use App\coffee;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('order.dashboard', compact('orders'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order(array(
            'customerID' => $request->get('customerID'),
            'tableNo' => $request->get('tableno'),
            'coffee1' => $request->get('coffee1'),
            'coffee2' => $request->get('coffee2'),
            'coffee3' => $request->get('coffee3'),
            'coffee4' => $request->get('coffee4'),
            'coffee5' => $request->get('coffee5'),
            'pastry1' => $request->get('pastry1'),
            'pastry2' => $request->get('pastry2'),
            'pastry3' => $request->get('pastry3'),
            'pastry4' => $request->get('pastry4'),
            'pastry5' => $request->get('pastry5'),
        ));
        
        $order->save();

        return redirect('/order/index')->with('status', 'Done added order');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::whereId($id)->firstOrFail();
               
        $coffee1 = DB::table('coffees')->where('id',2)->first();
        $coffee2 = DB::table('coffees')->where('id',3)->first();
        $coffee3 = DB::table('coffees')->where('id',4)->first();
        $coffee4 = DB::table('coffees')->where('id',5)->first();
        $coffee5 = DB::table('coffees')->where('id',6)->first();

        $pastry1 = DB::table('pastries')->where('id',7)->first();
        $pastry2 = DB::table('pastries')->where('id',10)->first();
        $pastry3 = DB::table('pastries')->where('id',11)->first();
        $pastry4 = DB::table('pastries')->where('id',12)->first();
        $pastry5 = DB::table('pastries')->where('id',15)->first();


        $total = 0;
        for( $i=1 ;$i < 6;$i++) { 
            $total = (${'coffee'.$i}->price * $order->{'coffee'.$i}) + (${'pastry'.$i}->price * $order->{'pastry'.$i}) + $total;
        }

        $user = \Auth::user();
        
        
         return view('order.show', compact('order','coffee1','coffee2','coffee3','coffee4','coffee5','pastry1','pastry2','pastry3','pastry4','pastry5', 'total', 'user'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
