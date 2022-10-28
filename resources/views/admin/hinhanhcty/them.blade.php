@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Hình ảnh cty
                        <small>Thêm</small>
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
                    <form action="admin/hinhanhcty/them" method="POST" enctype="multipart/form-data">

                        <input name="_token" type="hidden" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="Ten" placeholder="Nhập tên "  required/>
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" name="AnhDaiDien" required accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Thứ tự hiển thị trên trang chủ </label>
                            <input class="form-control" name="STT" type="number" placeholder="Nhập STT" value="99"  required/>
                        </div>
                      
                        <button type="submit" class="btn btn-default">Thêm</button>
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