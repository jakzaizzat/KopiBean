@extends('master')
@section('title', 'View a User')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">{!! $user->id !!}</h2>
                    <p> <strong>Status</strong>: {!! $user->name !!}</p>
                    <p> {!! $user->email !!} </p>
                    <p>{!! $role !!}</p>
                </div>
                <a href="{!! action('AdminsController@assignRole', $user->id) !!}" class="btn btn-primary">Assign As Staff</a>
                <a href="{!! action('AdminsController@assignRole', $user->id) !!}" class="btn btn-primary">Assign As Admin</a>
                <a href="#" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-info">Delete</a>
            </div>
    </div>

@endsection