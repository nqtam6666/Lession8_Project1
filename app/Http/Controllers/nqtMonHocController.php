<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class nqtMonHocController extends Controller
{
    // Đọc toàn bộ dữ liệu trong bảng môn học
    public function ListMH()
    {
    $monHocs = DB::table('nqtmh')->get();
    return view('nqtMonHoc.nqtListsMH',['monHocs'=>$monHocs]);
    }
    public function detail($mamh)
    {
    // Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện makh
        $monhoc = DB::select('select * from nqtmh where mamh =?',[$mamh])[0];
        return view('nqtMonHoc.nqtDetailMH',['monhoc'=>$monhoc]);
    }
    public function nqtEdit($mamh)
    {
        $monhoc = DB::select('select * from nqtmh where mamh =?',[$mamh])[0];
        return view('nqtMonHoc.nqtEditMH',['monhoc'=>$monhoc]);
    }
    public function nqtEditSubmit(request $request)
    {
        $mamh = $request->input('nqtMaMH');
        $tenmh = $request->input('nqtTenMH');
        $sotiet = $request->input('nqtSoTiet');
        DB::update("UPDATE nqtmh SET tenmh=?, sotiet=? where mamh =?", [$tenmh, $sotiet,$mamh]);
        return redirect('/monhocs');
    }
    public function nqtNew()
    {
        return view('nqtMonHoc.nqtCreate');
    }
    public function nqtNewSubmit(request $request)
    {
        $validate = $request->validate([
            "makh" => "required|min:1|max:5",
            "tenkh" => "required|string"
        ],
        [
            'makh.required'=>'Vui lòng nhập mã khoa',
            'makh.min'=>'Nhập min 1 kí tự',
            'makh.max'=>'Nhập max 5 kí tự',
            'tenkh.required'=>'Vui lòng nhập tên khoa',
            'tenkh.string' => 'Tên khoa phải là một chuỗi văn bản.'
            
        ]);
        $makh = $request -> input('makh');
        $tenkh = $request -> input('tenkh');
        $khoa = DB::select('INSERT INTO `nqtkhoa` values(?, ?)',[$makh, $tenkh]);
        return redirect('/khoas');
    }
}
