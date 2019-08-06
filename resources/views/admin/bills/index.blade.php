@extends('layouts.admin')
@section('content')

<div class="box-header">
    <h1 class="box-title">list of Bills</h1>
</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_bills</th>
          <th>id_products</th>
          <th>id_users</th>
          <th>number</th>
          <th>date</th>
          <th>status</th>
          <th>vat</th>
        </tr>
        
        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_bills}}</td>
          <td>{{$r->id_products}}</td>
          <td>{{$r->id_users}}</td>
          <td>{{$r->number}}</td>
          <td>{{$r->date}}</td>
          <td>{{$r->status}}</td>
          <td>{{$r->vat}}</td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>


  
  {{$list->links()}}
@endsection  