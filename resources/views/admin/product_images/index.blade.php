@extends('layouts.admin')
@section('content')

<div class="box-header">
    <h1 class="box-title">list of product - images</h1>
</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_products</th>
          <th>id_images</th>
        </tr>
        
        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_products}}</td>
          <td>{{$r->id_images}}</td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>


  
  {{$list->links()}}
@endsection  