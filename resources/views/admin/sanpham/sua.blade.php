@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Máy in/Thiết bị
                        <small>Sửa</small>
                    </h1>
                    @if(count($errors) >0)
                        <div class="alert alert-danger">
                            @foreach($errors ->all() as $err)
                                {{$err}} <br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">

                        <input name="_token" type="hidden" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control" name="DanhMucCha">

                                @foreach($danhmucs as $dm)
                                    <option value="{{$dm->id}}"
                                    @if($dm->id == $sanpham ->danh_muc)
                                        selected
                                            @endif
                                    >{{$dm -> ten}}

                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên </label>
                            <input class="form-control" name="Ten" placeholder="Nhập tên " value="{{$sanpham->ten}}"  required/>
                        </div>
                        <div class="form-group">
                            <label>Mã sản phẩm </label>
                            <input class="form-control" name="MaSanPham" placeholder="Nhập mã " value="{{$sanpham->ma_san_pham}}"  required/>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea id="demo" class="ckeditor" name="MoTa" required >{{$sanpham->mo_ta}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện </label>
                            <div><img src="upload/sanpham/{{$sanpham->hinh_anh}}" style="width: 100px;"></div>
                            <input type="file" name="AnhDaiDien"  accept="image/*" >
                        </div>
                        <div class="form-group">
                            <label>Thứ tự hiển thị</label>
                            <input class="form-control" name="STT" type="number" placeholder="Nhập stt " value="{{$sanpham->stt}}"  required/>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        <button type="reset" class="btn btn-default">Nhập lại</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection