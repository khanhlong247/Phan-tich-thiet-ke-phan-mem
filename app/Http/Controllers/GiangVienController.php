<?php

namespace App\Http\Controllers;

use App\Models\GiangVien;
use Illuminate\Http\Request;

class GiangVienController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $giangvien = GiangVien::where('Email', $user->email)->first();
        return view('giangvien.dashboard', compact('giangvien'));
    }

    public function index()
    {
        $dsGiangVien = GiangVien::all();
        return view('giangvien.index', compact('dsGiangVien'));
    }

    public function create()
    {
        return view('giangvien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaGiangVien' => 'required|unique:giang_vien,MaGiangVien',
            'TenGiangVien' => 'required'
        ]);
        GiangVien::create($request->all());
        return redirect()->route('giangvien.index')->with('success', 'Thêm Giảng Viên thành công!');
    }

    public function show($id)
    {
        $giangvien = GiangVien::findOrFail($id);
        return view('giangvien.show', compact('giangvien'));
    }

    public function edit($id)
    {
        $giangvien = GiangVien::findOrFail($id);
        return view('giangvien.edit', compact('giangvien'));
    }

    public function update(Request $request, $id)
    {
        $giangvien = GiangVien::findOrFail($id);
        $request->validate([
            'TenGiangVien' => 'required'
        ]);
        $giangvien->update($request->all());
        return redirect()->route('giangvien.index')->with('success', 'Cập nhật Giảng Viên thành công!');
    }

    public function destroy($id)
    {
        $giangvien = GiangVien::findOrFail($id);
        $giangvien->delete();
        return redirect()->route('giangvien.index')->with('success', 'Xóa Giảng Viên thành công!');
    }
}
