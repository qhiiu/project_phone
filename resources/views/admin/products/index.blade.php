@extends('layouts.admin')
@section('content')
<div class="box-header">
    <h1 class="box-title">list of products</h1>
</div>
<div class="box">

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
          {{-- ===================== --}}
          <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6" >
                    {{-- ----------------------- phone---------------------------- --}}
                <h1>         phone               </h1>
                <div>
                    @foreach ($list as $r)
                        @if ($r->classify == 'phone')
                            <p>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample{{$r->id_products}}" aria-expanded="false" aria-controls="collapseExample{{$r->id_products}}">
                                    <span class="product_column1">id_products</span>
                                    <span class="product_column2">{{$r->id_products}}</span>
        
                                    <span class="product_column1">name</span>
                                    <span class="product_column2">{{$r->name}}</span>
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample{{$r->id_products}}">
                                <div class="card card-body">
                                    <span class="product_column1">id_products</span>
                                    <span class="product_column2">{{$r->id_products}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">classify</span>
                                    <span class="product_column2">{{$r->classify}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">name</span>
                                    <span class="product_column2">{{$r->name}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">manufacturer</span>
                                    <span class="product_column2">{{$r->manufacturer}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">nsx</span>
                                    <span class="product_column2">{{$r->nsx}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">price</span>
                                    <span class="product_column2">{{$r->price}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">status</span>
                                    <span class="product_column2">{{$r->status}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">man_hinh</span>
                                    <span class="product_column2">{{$r->man_hinh}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">he_dieu_hanh</span>
                                    <span class="product_column2">{{$r->he_dieu_hanh}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">camera_truoc</span>
                                    <span class="product_column2">{{$r->camera_truoc}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">camera_sau</span>
                                    <span class="product_column2">{{$r->camera_sau}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">ram</span>
                                    <span class="product_column2">{{$r->ram}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">bo_nho_trong</span>
                                    <span class="product_column2">{{$r->bo_nho_trong}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">dung_luong_pin</span>
                                    <span class="product_column2">{{$r->dung_luong_pin}}</span>
                                </div>
                                <div  class="card card-body">
                                    <span class="product_column1">sale_off_status</span>
                                    <span class="product_column2">{{$r->sale_off_status}}</span>
                                </div>
                                <div class="card card-body">
                                    <span class="product_column1">sale_off_percent</span>
                                    <span class="product_column2">{{$r->sale_off_percent}}</span>
                                </div>
                                <div class="card card-body">
                                    <span class="product_column1">sale_off_start</span>
                                    <span class="product_column2">{{$r->sale_off_start}}</span>
                                </div>
                                <div class="card card-body">
                                    <span class="product_column1">sale_off_end</span>
                                    <span class="product_column2">{{$r->sale_off_end}}</span>
                                </div>
                                <div class="card card-body">
                                    <span class="product_column1">introduce</span>
                                    <span class="product_column2">{{$r->introduce}}</span>
                                </div>
                            </div>   
                        @endif                
                    @endforeach
                </div> 
                    {{-- ----------------------- end phone---------------------------- --}}
                  </div>
                  <div class="col-sm-6" style="border-left:1px solid blue;">
                    {{-- ----------------------- accossery---------------------------- --}}
                <h1>         accossery               </h1>
                <div>
                    @foreach ($list as $r)
                    @if ($r->classify == 'accessory')
                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample{{$r->id_products}}" aria-expanded="false" aria-controls="collapseExample{{$r->id_products}}">
                                <span class="product_column1">id_products</span>
                                <span class="product_column2">{{$r->id_products}}</span>
    
                                <span class="product_column1">name</span>
                                <span class="product_column2">{{$r->name}}</span>
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample{{$r->id_products}}">
                            <div class="card card-body">
                                <span class="product_column1">id_products</span>
                                <span class="product_column2">{{$r->id_products}}</span>
                            </div>
                            <div  class="card card-body">
                                <span class="product_column1">classify</span>
                                <span class="product_column2">{{$r->classify}}</span>
                            </div>
                            <div  class="card card-body">
                                <span class="product_column1">name</span>
                                <span class="product_column2">{{$r->name}}</span>
                            </div>
                            <div  class="card card-body">
                                <span class="product_column1">manufacturer</span>
                                <span class="product_column2">{{$r->manufacturer}}</span>
                            </div>
                            <div  class="card card-body">
                                <span class="product_column1">nsx</span>
                                <span class="product_column2">{{$r->nsx}}</span>
                            </div>
                            <div  class="card card-body">
                                <span class="product_column1">price</span>
                                <span class="product_column2">{{$r->price}}</span>
                            </div>
                            <div  class="card card-body">
                                <span class="product_column1">status</span>
                                <span class="product_column2">{{$r->status}}</span>
                            </div>
                            <div  class="card card-body">
                                <span class="product_column1">sale_off_status</span>
                                <span class="product_column2">{{$r->sale_off_status}}</span>
                            </div>
                            <div class="card card-body">
                                <span class="product_column1">sale_off_percent</span>
                                <span class="product_column2">{{$r->sale_off_percent}}</span>
                            </div>
                            <div class="card card-body">
                                <span class="product_column1">sale_off_start</span>
                                <span class="product_column2">{{$r->sale_off_start}}</span>
                            </div>
                            <div class="card card-body">
                                <span class="product_column1">sale_off_end</span>
                                <span class="product_column2">{{$r->sale_off_end}}</span>
                            </div>
                            <div class="card card-body">
                                <span class="product_column1">introduce</span>
                                <span class="product_column2">{{$r->introduce}}</span>
                            </div>
                        </div>   
                        @endif                
                    @endforeach
 
                    {{-- {{$list->links()}} --}}
                </div>
                    {{-- ----------------------- end phone---------------------------- --}}

                  </div>
                </div>
          {{-- ===================== --}}
                

                    
    </table>
</div>
    <!-- /.box-body -->

@endsection  