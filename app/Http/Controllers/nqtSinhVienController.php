<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class nqtSinhVienController extends Controller
{
    public function nqtAddSV()
    {
        // Lấy danh sách Mã Khoa và Tên Khoa từ bảng nqtkhoa
        $nqtKhoa = DB::table('nqtkhoa')->pluck('nqtTenKhoa', 'nqtMaKhoa');

        // Truyền danh sách Mã Khoa và Tên Khoa vào view
        return view('nqtSinhVien.nqtAddSV', compact('nqtKhoa'));
    }

    public function ListSinhVien()
    {
        $AllSinhVien = DB::table('nqtSinhVien')->get();
        return view('nqtSinhVien.nqtListSinhVien',['ListSV'=>$AllSinhVien]);
    }
    public function detail($nqtmaSV)
    {
    // Truy vấn đọc dữ liệu từ bảng khoa theo điều kiện makh
        $sinhvien = DB::select('select * from nqtsinhvien where nqtmasv =?',[$nqtmaSV])[0];
        return view('nqtSinhVien.nqtDetailSV',['sinhvien'=>$sinhvien]);
    }
    // public function nqtAddSV()
    // {
    //     return view('nqtSinhVien.nqtAddSV');
    // }
    public function nqtAddSVSubmit(request $request)
    {
        $validate = $request->validate([
            "nqtMaSV" => "required|min:1|max:10",
            "nqtHoSV" => "required|string|min:1|max:50",
            "nqtTenSV"=> "required|string|min:1|max:50",
            "nqtGioiTinh"=> "required|numeric|min:0|max:1",
            "nqtNgaySinh"=> "required",
            "nqtNoiSinh"=> "required|string|min:1|max:100",
            "nqtHocBong"=> "required|numeric",
            "nqtMaKhoa"=> 'required',
            "nqtDiemTB"=> "required|numeric"

        ],
        [
            'nqtMaSV.required'=>'Vui lòng nhập',
            'nqtMaSV.min'=>'Nhập min 1 kí tự',
            'nqtMaSV.max'=>'Nhập max 10 kí tự',
            'nqtHoSV.required'=>'Vui lòng nhập',
            'nqtTenSV.required'=>'Vui lòng nhập',
            'nqtGioiTinh.required'=>'Vui lòng nhập',
            'nqtNgaySinh.required'=>'Vui lòng nhập',
            'nqtNoiSinh.required'=>'Vui lòng nhập',
            'nqtHocBong.required'=>'Vui lòng nhập',
            'nqtMaKhoa.required'=>'Vui lòng nhập',
            'nqtDiemTB.required'=>'Vui lòng nhập',

        ]);
        $masv = $request->input('nqtMaSV');
        $hosv = $request->input('nqtHoSV');
        $tensv = $request->input('nqtTenSV');
        $gioitinh = intval($request->input('nqtGioiTinh'));
        $ngaysinh = $request->input('nqtNgaySinh');
        $noisinh = $request->input('nqtNoiSinh');
        $hocbong = $request->input('nqtHocBong');
        $makhoa = $request->input('nqtMaKhoa');

        // Ép kiểu điểm trung bình thành kiểu số thực (float)
        $diemtb = intval($request->input('nqtDiemTB')); // Chắc chắn rằng điểm trung bình là một số thực

        // Chuyển đổi ngày tháng thành định dạng chuẩn (YYYY-MM-DD) nếu cần
        $ngaysinh = date('Y-m-d', strtotime($ngaysinh)); // Chuyển đổi ngày tháng thành định dạng phù hợp với MySQL

        $khoa = DB::insert("INSERT INTO `nqtsinhvien` values(?, ?, ?, ?, ?, ?, ?, ?, ?)", [
            $masv,
            $hosv,
            $tensv,
            $gioitinh,
            $ngaysinh,
            $noisinh,
            $hocbong,
            $makhoa,
            $diemtb // Chèn giá trị điểm trung bình là số thực
        ]);

        // DB::table('nqtsinhvien')->insert([
        //     'nqtMaSV' => 'S01',
        //     'nqtHoSV' => 'eqw',
        //     'nqtTenSV' => '222',
        //     'nqtGioiTinh' => 1, // Giá trị BIT
        //     'nqtNgaySinh' => '2024-12-14',
        //     'nqtNoiSinh' => 'aa',
        //     'nqtHocBong' => '1111111',
        //     'nqtMaKhoa' => 'S0',
        //     'nqtDiemTB' => '11',
        // ]);


        return redirect('/ListSinhVien');
    }
}
