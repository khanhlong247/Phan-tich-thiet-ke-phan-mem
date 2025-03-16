<?php

namespace App\Http\Controllers;

use App\Models\HocKy;
use Illuminate\Http\Request;

class HocKyController extends Controller
{
    public function index()
    {
        $dsHocKy = HocKy::all();
        return view('hocky.index', compact('dsHocKy'));
    }

    public function create()
    {
        return view('hocky.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaHocKy' => 'required|unique:hoc_ky,MaHocKy',
            'TenHocKy' => 'required',
            'NamHocHienTai' => 'required'
        ]);
        HocKy::create($request->all());
        return redirect()->route('hocky.index')->with('success', 'Thêm Học Kỳ thành công!');
    }

    public function show($id)
    {
        $hocky = HocKy::findOrFail($id);
        return view('hocky.show', compact('hocky'));
    }

    public function edit($id)
    {
        $hocky = HocKy::findOrFail($id);
        return view('hocky.edit', compact('hocky'));
    }

    public function update(Request $request, $id)
    {
        $hocky = HocKy::findOrFail($id);
        $request->validate([
            'TenHocKy' => 'required'
        ]);
        $hocky->update($request->all());
        return redirect()->route('hocky.index')->with('success', 'Cập nhật Học Kỳ thành công!');
    }

    public function destroy($id)
    {
        $hocky = HocKy::findOrFail($id);
        $hocky->delete();
        return redirect()->route('hocky.index')->with('success', 'Xóa Học Kỳ thành công!');
    }
}
