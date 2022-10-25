<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HinhAnhCty;
use Illuminate\Support\Str;

class HinhAnhCtyController extends Controller
{
    public function getThem(){
        return view('admin.hinhanhcty.them');
    }
    public function postThem(Request $request){
        $hinhanhcty = new HinhAnhCty();
        $hinhanhcty->ten = $request->Ten;
        $hinhanhcty->ten_khong_dau = changeTitle($request->Ten);
        $file = $request ->file('AnhDaiDien');
        $name = $file->getClientOriginalName();
        $Hinh =  Str::random(4)."_".$name."_".$hinhanhcty->ten_khong_dau;
        while (file_exists('upload/hinhanhcty/'.$Hinh))
        {
            $Hinh = Str::random(4)."_".$name."_".$hinhanhcty->ten_khong_dau;
        }
        $file ->move('upload/hinhanhcty/',$Hinh);
        $hinhanhcty -> hinh_anh = $Hinh;
        $hinhanhcty->save();
        return redirect('admin/hinhanhcty/them')->with('thongbao','Thêm thành công');

    }
    public function getSua($id){
        $hinhanhcty = HinhAnhCty::find($id);
        return view('admin.hinhanhcty.sua',['hinhanhcty'=>$hinhanhcty]);
    }
    public function postSua($id, Request $request){
        $hinhanhcty = HinhAnhCty::find($id);
        $hinhanhcty->ten = $request->Ten;
        $hinhanhcty->ten_khong_dau = changeTitle($request->Ten);
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
            $Hinh = Str::random(4)."_".$name."_".$hinhanhcty->ten_khong_dau;
            while (file_exists('upload/hinhanhcty/'.$Hinh))
            {
                $Hinh = Str::random(4)."_".$name."_".$hinhanhcty->ten_khong_dau;
            }
            $file ->move('upload/hinhanhcty/',$Hinh);
            $hinhanhcty -> hinh_anh = $Hinh;
        }
        $hinhanhcty->save();
        return redirect('admin/hinhanhcty/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function danhsach(){
        $hinhanhctys = HinhAnhCty::all();
        return view('admin.hinhanhcty.danhsach',['hinhanhctys'=>$hinhanhctys]);
    }
    public function xoa($id){
        $hinhanhcty=HinhAnhCty::find($id);
        $file =public_path('upload/hinhanhcty/'.$hinhanhcty->hinh_anh);
        if(file_exists($file)){
            $img= unlink($file);
        }
        HinhAnhCty::destroy($id);
        return redirect('admin/hinhanhcty/danhsach')->with('thongbao','Xóa thành công');
    }
}
