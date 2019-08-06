@extends('layouts.admin')
@section('content')

<div class="box-header">
    <h1 class="box-title">list of News</h1>
</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody>
        <tr>
          <th>id_news</th>
          <th>title</th>
          <th>content</th>
          <th>date</th>
          <th>author</th>
          <th>images</th>
        </tr>
        
        @foreach ($list as $r)
        <tr>
          <td>{{$r->id_news}}</td>
          <td>{{$r->title}}</td>
          <td>{{$r->content}}</td>
          <td>{{$r->date}}</td>
          <td>{{$r->author}}</td>
          <td>{{$r->images}}</td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>


  
  {{$list->links()}}
@endsection  