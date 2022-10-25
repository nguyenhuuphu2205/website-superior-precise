@extends('pages.layout.index')
@section('css')
<link rel="stylesheet" href="assets/css/right-menu/style.css">
@endsection
@section('content')
<main id="main" data-aos="fade-up" >

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs ">
      <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class="text-primary pl-3"><b>Hệ thống văn phòng và xưởng sản xuất</b></h2>
          <ol>
            <li><a href="trangchu">Trang chủ</a></li>
          <li>Văn phòng</li>
          </ol>
        </div>

      </div>
      
    </section><!-- End Breadcrumbs -->
    
    <section class="inner-page">
       
      <div class="container d-md-flex align-items-stretch">
        
        <!-- Page Content  -->
        <div id="content" class="p-4">
            @if(count($vanphongs) ==0)
            <h3>Chưa có sản phẩm</h3>
            @endif 
           
          <div class="row">
            
              @foreach($vanphongs as $sp)
            <div class="col-md-4 pl-1 pr-1 pb-2">
              <div class="card" style="height: 100%">
              <img class="card-img-top lozad img-fluid" data-src="upload/hinhanhcty/{{$sp->hinh_anh}}" alt="{{$sp->ten_khong_dau}}" style="height: 320px; width:100%" >
                <div class="card-body mb-3">
                  <h5 class="card-title">{{$sp->ten}}</h5>
                
                <!-- <a href="san-pham-in/{{$sp->id}}/{{$sp->ten_khong_dau}}" class="btn btn-outline-primary ">Xem chi tiết</a> -->
                </div>
              </div>
            </div>
            @endforeach
            
          

           

          </div>
         </div>
  
      @include('pages.layout.right-menu')
      </div>
    </section>

  </main><!-- End #main -->
@endsection
