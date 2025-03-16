<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ViTriThucTap;
use App\Models\GiangVien;
use Illuminate\Http\Request;

class ViTriThucTapController extends Controller
{
    public function index()
    {
        // Lấy danh sách vị trí thực tập gửi từ doanh nghiệp
        $dsViTri = ViTriThucTap::all();
        return view('admin.vitrithethap.index', compact('dsViTri'));
    }

    public function show($id)
    {
        $vitri = ViTriThucTap::findOrFail($id);
        return view('admin.vitrithethap.show', compact('vitri'));
    }

    public function assign($id)
    {
        $vitri = ViTriThucTap::findOrFail($id);
        $dsGiangVien = GiangVien::all();
        return view('admin.vitrithethap.assign', compact('vitri', 'dsGiangVien'));
    }

    public function assignStore(Request $request, $id)
    {
        $vitri = ViTriThucTap::findOrFail($id);
        $vitri->GiangVienHuongDan = $request->GiangVienHuongDan;
        $vitri->TrangThai = 'Đã duyệt';
        $vitri->save();

        return redirect()->route('admin.vitrithethap.index')->with('success', 'Gán giảng viên thành công!');
    }
}
