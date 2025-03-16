<?php

namespace App\Http\Controllers;

use App\Models\SinhVien;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $sinhvien = SinhVien::where('Email', $user->email)->first();
        return view('sinhvien.dashboard', compact('sinhvien'));
    }

    public function index()
    {
        $dsSinhVien = SinhVien::all();
        return view('sinhvien.index', compact('dsSinhVien'));
    }

    public function create()
    {
        return view('sinhvien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaSinhVien' => 'required|unique:sinh_vien,MaSinhVien',
            'TenSinhVien' => 'required'
        ]);
        SinhVien::create($request->all());
        return redirect()->route('sinhvien.index')->with('success', 'Thêm Sinh Viên thành công!');
    }

    public function show($id)
    {
        $sinhvien = SinhVien::findOrFail($id);
        return view('sinhvien.show', compact('sinhvien'));
    }

    public function edit($id)
    {
        $sinhvien = SinhVien::findOrFail($id);
        return view('sinhvien.edit', compact('sinhvien'));
    }

    public function update(Request $request, $id)
    {
        $sinhvien = SinhVien::findOrFail($id);
        $request->validate([
            'TenSinhVien' => 'required'
        ]);
        $sinhvien->update($request->all());
        return redirect()->route('sinhvien.index')->with('success', 'Cập nhật Sinh Viên thành công!');
    }

    public function destroy($id)
    {
        $sinhvien = SinhVien::findOrFail($id);
        $sinhvien->delete();
        return redirect()->route('sinhvien.index')->with('success', 'Xóa Sinh Viên thành công!');
    }
}
