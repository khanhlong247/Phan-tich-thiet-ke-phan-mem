<?php

namespace App\Http\Controllers;

use App\Models\NamHoc;
use Illuminate\Http\Request;

class NamHocController extends Controller
{
    public function index()
    {
        $dsNamHoc = NamHoc::all();
        return view('namhoc.index', compact('dsNamHoc'));
    }

    public function create()
    {
        return view('namhoc.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaNamHoc' => 'required|unique:nam_hoc,MaNamHoc',
            'TenNamHoc' => 'required',
            'KhoaChuyenMon' => 'required'
        ]);
        NamHoc::create($request->all());
        return redirect()->route('namhoc.index')->with('success', 'Thêm Năm Học thành công!');
    }

    public function show($id)
    {
        $namhoc = NamHoc::findOrFail($id);
        return view('namhoc.show', compact('namhoc'));
    }

    public function edit($id)
    {
        $namhoc = NamHoc::findOrFail($id);
        return view('namhoc.edit', compact('namhoc'));
    }

    public function update(Request $request, $id)
    {
        $namhoc = NamHoc::findOrFail($id);
        $request->validate([
            'TenNamHoc' => 'required'
        ]);
        $namhoc->update($request->all());
        return redirect()->route('namhoc.index')->with('success', 'Cập nhật Năm Học thành công!');
    }

    public function destroy($id)
    {
        $namhoc = NamHoc::findOrFail($id);
        $namhoc->delete();
        return redirect()->route('namhoc.index')->with('success', 'Xóa Năm Học thành công!');
    }
}
