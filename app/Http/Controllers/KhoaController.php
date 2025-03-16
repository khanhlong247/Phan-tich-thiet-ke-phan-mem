<?php

namespace App\Http\Controllers;

use App\Models\Khoa;
use Illuminate\Http\Request;

class KhoaController extends Controller
{
    public function index()
    {
        $dsKhoa = Khoa::all();
        return view('khoa.index', compact('dsKhoa'));
    }

    public function create()
    {
        return view('khoa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaKhoa' => 'required|unique:khoa,MaKhoa',
            'TenKhoa' => 'required'
        ]);
        Khoa::create($request->all());
        return redirect()->route('khoa.index')->with('success', 'Thêm Khoa thành công!');
    }

    public function show($id)
    {
        $khoa = Khoa::findOrFail($id);
        return view('khoa.show', compact('khoa'));
    }

    public function edit($id)
    {
        $khoa = Khoa::findOrFail($id);
        return view('khoa.edit', compact('khoa'));
    }

    public function update(Request $request, $id)
    {
        $khoa = Khoa::findOrFail($id);
        $request->validate([
            'TenKhoa' => 'required'
        ]);
        $khoa->update($request->all());
        return redirect()->route('khoa.index')->with('success', 'Cập nhật Khoa thành công!');
    }

    public function destroy($id)
    {
        $khoa = Khoa::findOrFail($id);
        $khoa->delete();
        return redirect()->route('khoa.index')->with('success', 'Xóa Khoa thành công!');
    }
}
