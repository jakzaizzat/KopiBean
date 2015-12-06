@extends('master')
@section('title', 'Users')


@section('content')
      
<!-- Your Page Content Here -->
          <div class="box box-info">
                <div class="box-body">
                  <div class="table-responsive">

                     @if ($users->isEmpty())
                        <p> There is no user.</p>
                    @else

                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>User ID</th>
                          <th>Email</th>
                          <th>Salary</th>
                          <th>Role</th>
                        </tr>
                      </thead>
                      <tbody>

                         @foreach($users as $user)
                          <tr>
                            <td><a href="pages/examples/invoice.html"><span class="label label-success">{!! $user->id !!}</span></a></td>
                            <td>{!! $user->email !!}</td>
                            <td>RM{!! $user->salary !!}</td>
                            <td>Admin</td>
                          </tr>
                          @endforeach

                      </tbody>
                    </table>
                    @endif
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Register New User</a>
                </div><!-- /.box-footer -->
              </div>
@endsection