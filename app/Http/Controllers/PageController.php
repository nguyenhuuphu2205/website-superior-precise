<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\ThongTinWebsite;
use Illuminate\Http\Request;
use App\Models\SanPhamIn;
use App\Models\HinhAnhCty;
use App\Models\Video;
use App\Models\SanPham;
class PageController extends Controller
{
    function __construct()
    {
       $thong_tin_website = ThongTinWebsite::first();
       $danh_muc_cha = DanhMuc::where('danh_muc_cha',-1)->get();
       view()->share('thongtinwebsite',$thong_tin_website);
       view()->share('danhmuccha',$danh_muc_cha);

    }
    
    public function trangchu(){
        $danh_muc_noi_bat = DanhMuc::where('noi_bat',1)->orderBy('stt','asc')->get();
        // $sanphamins = SanPhamIn::take(4)->get();
        $hinhanhctys = HinhAnhCty::orderBy('stt','asc')->get();
        return view('pages.trangchu',['danhmucnoibat'=>$danh_muc_noi_bat,'hinhanhctys'=>$hinhanhctys]);
    }
    public function danhmuc($id){
       
        $danhmuc = DanhMuc::find($id);
        $sanphams = SanPham::where('danh_muc',$id)->get();
  
        $danhMucCon = $danhmuc->danhMucCon;
        if(count($danhMucCon)>0){
            foreach($danhMucCon as $dmC){
                error_log('in foreach');
                $sanphams = $sanphams->merge($dmC->sanPham);
                error_log($dmC->sanPham);
              
            }
        }
        error_log($sanphams);
        return view('pages.danhmuc',['sanphams'=>$sanphams,'danhmuc'=>$danhmuc]);

    }
    public function tatca(){
        $danhmuc = new DanhMuc();
        $danhmuc->ten="Tất cả sản phẩm";
        $sanphams = SanPham::all();
        return view('pages.danhmuc',['sanphams'=>$sanphams,'danhmuc'=>$danhmuc]);
    }
    public function sanpham($id){
        $sanpham = SanPham::find($id);
        $iddanhmuc = $sanpham->danh_muc;
        $danhmuc =  $danhmuc = DanhMuc::find($iddanhmuc);
        $san_pham_tuong_tu = sanpham::where('danh_muc',$iddanhmuc)->where('id','<>',$id)->take(4)->get();
        return view('pages.sanpham',['sanpham'=>$sanpham,'sanphamtuongtu'=>$san_pham_tuong_tu,'danhmuc'=>$danhmuc]);
    }
    public function vanphong($id){
        $vanphong = HinhAnhCty::find($id);
        return view('pages.vatlieuin',['vanphong'=>$vanphong]);
        
    }
    public function vanphongAll(){
        $vanphongs = HinhAnhCty::all();
        return view('pages.vanphong',['vanphongs'=>$vanphongs]);
    }
    public function sanphamin($id){
        $sanphamin = SanPhamIn::find($id);
        $vatlieu = VatLieuIn::find($sanphamin->vat_lieu);
        $sanphamintuongtu = SanPhamIn::where('vat_lieu',$vatlieu->id)->where('id','<>',$id)->take(4)->get();
        return view('pages.sanphamin',['sanphamin'=>$sanphamin,'vatlieuin'=>$vatlieu,'sanphamintuongtu'=>$sanphamintuongtu]);
    }
    public function timkiem(Request $request){
        $sanphams = SanPham::where('ten','like','%'.$request->tukhoa.'%')->get();
        $danhmuc = new DanhMuc();
        $danhmuc->ten="Kết quả tìm kiếm cho từ khóa: ".$request->tukhoa;
        return view('pages.danhmuc',['sanphams'=>$sanphams,'danhmuc'=>$danhmuc]);

    }
    public function video(){
        $videos = Video::all();
        return view('pages.video',['videos'=>$videos]);

    }
}
