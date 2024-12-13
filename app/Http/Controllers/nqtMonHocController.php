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
    public function nqtNewmh()
    {
        return view('nqtMonHoc.nqtCreate');
    }
    public function nqtNewSubmitmh(request $request)
    {
        $validate = $request->validate([
            "nqtMaMH" => "required|min:1|max:5",
            "nqtTenMH" => "required|string",
            "nqtSoTiet"=> "required|numeric"
        ],
        [
            'nqtMaMH.required'=>'Vui lòng nhập mã môn học',
            'nqtMaMH.min'=>'Nhập min 1 kí tự',
            'nqtMaMH.max'=>'Nhập max 5 kí tự',
            'nqtTenMH.required'=>'Vui lòng nhập tên môn học',
            'nqtTenMH.string' => 'Tên môn học phải là một chuỗi văn bản.',
            'nqtSoTiet.required' => 'Vui lòng nhập số tiết',
            'nqtSoTiet.numeric' => 'Số tiết là số'
            
        ]);
        $mamh = $request -> input('nqtMaMH');
        $tenmh = $request -> input('nqtTenMH');
        $sotiet = $request -> input('nqtSoTiet');
        $khoa = DB::select('INSERT INTO `nqtmh` values(?, ?, ?)',[$mamh, $tenmh, $sotiet]);
        return redirect('/monhocs');
    }
    public function delete($nqtmamh)
    {
        $khoa = DB::delete('delete from nqtmh where mamh =?',[$nqtmamh]);
        return redirect('/monhocs');    
    }   
}
