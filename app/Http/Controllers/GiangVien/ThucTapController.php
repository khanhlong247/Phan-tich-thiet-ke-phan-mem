<?php

namespace App\Http\Controllers\GiangVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaoCaoThucTap;

class ThucTapController extends Controller
{
    public function evaluateForm($maBaoCao)
    {
        $baoCao = BaoCaoThucTap::findOrFail($maBaoCao);
        return view('giangvien.thuctap.evaluate', compact('baoCao'));
    }

    public function evaluate(Request $request, $maBaoCao)
    {
        $baoCao = BaoCaoThucTap::findOrFail($maBaoCao);
        // Lưu điểm và nhận xét đánh giá (giả sử thêm các trường vào bảng báo cáo)
        $baoCao->Diem = $request->input('Diem');
        $baoCao->NhanXet = $request->input('NhanXet');
        $baoCao->save();

        return redirect()->route('giangvien.thuctap.evaluate')->with('success', 'Đánh giá thành công!');
    }
}
