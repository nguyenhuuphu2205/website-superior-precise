<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Node\Expr\FuncCall;

class DanhMuc extends Model
{
    use HasFactory;
    protected $table='danh_muc';
    public function danhMucCha(){
        return $this->belongsTo('App\Models\DanhMuc','danh_muc_cha','id');
    }
    public function danhMucCon(){
        return $this->hasMany('App\Models\DanhMuc','danh_muc_cha','id');
    }
    public function sanPham(){
        return $this->hasMany('App\Models\SanPham','danh_muc','id')->orderBy('stt','asc');
    }
}
