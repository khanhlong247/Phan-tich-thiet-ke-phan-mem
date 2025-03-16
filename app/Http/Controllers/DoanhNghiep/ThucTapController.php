<?php

namespace App\Http\Controllers\DoanhNghiep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DonDangKyThucTap;

class ThucTapController extends Controller
{
    public function evaluateForm($maSinhVien)
    {
        // Lấy thông tin đăng ký thực tập của sinh viên
        $don = DonDangKyThucTap::where('SinhVienThucTap', $maSinhVien)->first();
        return view('doanhnghiep.thuctap.evaluate', compact('don'));
    }

    public function evaluate(Request $request, $maSinhVien)
    {
        $don = DonDangKyThucTap::where('SinhVienThucTap', $maSinhVien)->firstOrFail();
        // Giới thiệu logic đánh giá từ Doanh nghiệp
        $don->DanhGiaDoanhNghiep = $request->input('NhanXet');
        $don->save();

        return redirect()->route('doanhnghiep.thuctap.evaluateForm', $maSinhVien)
                         ->with('success', 'Đánh giá sinh viên thành công!');
    }
}
