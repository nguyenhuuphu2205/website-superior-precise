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
            <h2 class="text-primary pl-3"><b>{{$sanpham->ten}}</b></h2>
            <ol>
              <li><a href="trangchu">Trang chủ</a></li>
            <li><a href="danh-muc/{{$danhmuc->id}}/{{$danhmuc->ten_khong_dau}}">{{$sanpham->danhMuc->ten}}</a></li>
            <li>{{$sanpham->ten}}</li>
            </ol>
          </div>
  
        </div>
        
      </section><!-- End Breadcrumbs -->
  


    <section class="inner-page">
      <div class="container d-md-flex align-items-stretch">
        <!-- Page Content  -->
        <div id="content" class="p-4">
       
          <div class="row">
            <div class="col-md-5">
              <!-- <img src="assets/img/printer/may1.png" alt="" class="img-fluid"> -->
            <a href="san-pham/{{$sanpham->id}}/{{$sanpham->ten_khong_dau}}#" class="pop">
              <img data-src="upload/sanpham/{{$sanpham->hinh_anh}}" class="img-fluid lozad" alt="{{$sanpham->ten_khong_dau}}">
            </a>
         
            
            
            
           

            </div>
            <div class="col-md-7">
              <h4 class="text-primary"><b>{{$sanpham->ten}}</b></h4>
            <p><b>Mã sản phẩm: {{$sanpham->ma_san_pham}}</b></p>
              <p class="text-danger">Giá: Liên hệ</p>
              <hr>
              <p class="text-justify">{!!$sanpham->mo_ta!!}
              </p>
             

            </div>
          </div>
          <hr>
          <div class="row justify-content-start mt-5">
            <div class="section-title">
              <h2 class="text-danger">SẢN PHẨM TƯƠNG TỰ</h2>
             
              <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
            </div>
          </div>
          <div class="row border">
              @foreach($sanphamtuongtu as $may)
            <div class="col-md-3 pl-1 pr-1 pb-2">
              <div class="card"  style="min-height: 450px" >
              <img class="card-img-top lozad" data-src="upload/sanpham/{{$may->hinh_anh}}" alt="{{$may->ten_khong_dau}}" width="100%" height="250px">
                <div class="card-body">
                  <h5 class="card-title">{{$may->ten}}</h5>
                <p class="card-text text-danger">Liên hệ: {{$thongtinwebsite->sdt}}</p>
                <a href="san-pham/{{$may->id}}/{{$may->ten_khong_dau}}" class="btn btn-outline-primary ">Xem chi tiết</a>
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

  <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">              
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
          <img src="" class="imagepreview" style="width: 100%;" >
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
<script>
    $(function() {
          $('.pop').on('click', function() {
              $('.imagepreview').attr('src', $(this).find('img').attr('src'));
              $('#imagemodal').modal('show');   
          });		
  });
  
    </script>
@endsection