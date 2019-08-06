@extends('layouts.admin')
@section('content')

<div class="box-header">
    <h1 class="box-title">list of Colors</h1>
</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_colors</th>
          <th>name</th>
        </tr>
        
        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_colors}}</td>
          <td>{{$r->name}}</td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>


  
  {{$list->links()}}
@endsection  