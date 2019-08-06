@extends('layouts.admin')
@section('content')

<div class="box-header">
    <h1 class="box-title">list of Users</h1>
</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_users</th>
          <th>classify</th>
          <th>username</th>
          <th>pwd</th>
          <th>phone</th>
          <th>email</th>
          <th>address</th>
          <th>fullname</th>
        </tr>
        
        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_users}}</td>
          <td>{{$r->classify}}</td>
          <td>{{$r->username}}</td>
          <td>{{$r->pwd}}</td>
          <td>{{$r->phone}}</td>
          <td>{{$r->email}}</td>
          <td>{{$r->address}}</td>
          <td>{{$r->fullname}}</td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>


  
  {{$list->links()}}
@endsection  