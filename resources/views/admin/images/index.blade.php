@extends('layouts.admin')
@section('content')

<div class="box-header">
    <h1 class="box-title">list of Images</h1>
</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_images</th>
          <th>name</th>
          <th>src</th>
        </tr>
        
        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_images}}</td>
          <td>{{$r->name}}</td>
          <td>{{$r->src}}</td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>


  
  {{$list->links()}}
@endsection  