<?php

namespace App\Http\Controllers\SinhVien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaoCaoThucTap;

class ThucTapController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'MaThucTap' => 'required',
            'BaoCao' => 'required|mimes:pdf,doc,docx|max:2048'
        ]);

        // Lưu file báo cáo vào thư mục public/reports
        $file = $request->file('BaoCao');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('reports'), $filename);

        BaoCaoThucTap::create([
            'MaBaoCao' => 'BC'.time(),
            'SinhVienThucTap' => auth()->user()->email, // Giả sử dùng email để nhận dạng
            'DiaDiemThucTap' => $request->input('MaThucTap'),
            'BaoCao' => $filename,
        ]);

        return redirect()->back()->with('success', 'Báo cáo đã được nộp thành công!');
    }
}
