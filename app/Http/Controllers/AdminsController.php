<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class AdminsController extends Controller
{

    
    public function index()
    {
        $users = User::all();
        $orders = Order::all();
        
        
        // foreach ($users as $user){

        //    if($user->hasRole('Staff')){
        //         $role = 'Staff';
        //    }elseif($user->hasRole('Admin')){
        //         $role = 'Admin';
        //    }else{
        //         $role = 'undefined';
        //    }
        // }

        return view('admin.dashboard', compact('users','orders'));
    
    }



    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {   

        $user = User::whereId($id)->firstOrFail();
        
        if ($user->hasRole('Staff')) {
            $role = 'Staff';
        } elseif ($user->hasRole('Admin')) {
            $role = 'Admin';
        } else {
            $role = 'Role not found';
        }


        return view('admin.show', compact('user','role'));
    }

    public function assignRole($id){
        $user = User::whereId($id)->firstOrFail();
        
        if($user->hasRole('Staff')){
            $user->removeRole('Staff');
            $user->assignRole('Admin');
        }
        else {
            $user->removeRole('Admin');
            $user->assignRole('Staff');
        }
        

        return redirect('/dashboard')->with('status', 'Your Role Has been changed');

    }

  
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
         $user = User::whereId($id)->firstOrFail();
         $user->destroy();

         return redirect('/dashboard');
    }
}
