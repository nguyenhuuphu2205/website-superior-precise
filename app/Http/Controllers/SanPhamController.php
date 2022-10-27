<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SanPhamController extends Controller
{
    public function getThem(){
        $danhmucs = DanhMuc::all();
        return view('admin.sanpham.them',['danhmucs'=>$danhmucs]);
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
            'MoTa'=>'required',
        ],
        [
            'MoTa.required'=>'Chưa nhập mô tả'
        ]);
        $san_pham = new SanPham();
        $san_pham -> ten = $request -> Ten;
        $san_pham -> ten_khong_dau = changeTitle($request->Ten);
        $san_pham -> ma_san_pham = $request->MaSanPham;
        $san_pham -> mo_ta = $request->MoTa;
        $san_pham ->danh_muc = $request->DanhMucCha;
        $san_pham ->stt = $request->STT;
        $file = $request ->file('AnhDaiDien');
        $name = $file->getClientOriginalName();
        $Hinh =  Str::random(4)."_".$name."_".$san_pham->ten_khong_dau;
        while (file_exists('upload/sanpham/'.$Hinh))
        {
            $Hinh = Str::random(4)."_".$name."_".$san_pham->ten_khong_dau;
        }
        $file ->move('upload/sanpham/',$Hinh);
        $san_pham -> hinh_anh = $Hinh;
        $san_pham->save();
        return redirect('admin/sanpham/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $danhmucs = DanhMuc::all();
        $sanpham = SanPham::find($id);
        return view('admin.sanpham.sua',['sanpham'=>$sanpham, 'danhmucs'=>$danhmucs]);
    }
    public function postSua($id,Request $request){
        $this->validate($request,
        [
            'MoTa'=>'required',
        ],
        [
            'MoTa.required'=>'Chưa nhập mô tả'
        ]);
        $san_pham = SanPham::find($id);
        $san_pham->ten = $request->Ten;
        $san_pham -> ten_khong_dau = changeTitle($request->Ten);
        $san_pham->ma_san_pham = $request->MaSanPham;
        $san_pham->mo_ta = $request->MoTa;
        $san_pham->danh_muc = $request->DanhMucCha;
        $san_pham->stt = $request->STT;
        if($request->hasFile('AnhDaiDien'))
        {
            $this->validate($request,
                [
                    'AnhDaiDien' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ],
                [
                    'AnhDaiDien.required' => 'Bạn chưa chọn hình đại diện',
                'AnhDaiDien.image' => 'Ảnh định dạng không hợp lệ',
                'AnhDaiDien.mimes' => 'Ảnh định dạng không hợp lệ'
                ]);
            $file = $request ->file('AnhDaiDien');
            $name = $file->getClientOriginalName();
            $Hinh = Str::random(4)."_".$name."_".$san_pham->ten_khong_dau;
            while (file_exists('upload/sanpham/'.$Hinh))
            {
                $Hinh = Str::random(4)."_".$name."_".$san_pham->ten_khong_dau;
            }
            $file ->move('upload/sanpham/',$Hinh);
            $san_pham -> hinh_anh = $Hinh;
        }
        $san_pham->save();
        return redirect('admin/sanpham/sua/'.$id)->with('thongbao','Sửa thành công');


    }
    public function danhsach(){
        $sanphams = SanPham::all();
        return view('admin.sanpham.danhsach',['sanphams'=>$sanphams]);
    }
    public function xoa($id){
        $sanpham=SanPham::find($id);
        $file =public_path('upload/sanpham/'.$sanpham->hinh_anh);
        if(file_exists($file)){
            $img= unlink($file);
        }
        SanPham::destroy($id);
        return redirect('admin/sanpham/danhsach')->with('thongbao','Xóa thành công');
    }
}
