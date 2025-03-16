<?php

namespace App\Http\Controllers;

use App\Models\DoanhNghiep;
use Illuminate\Http\Request;

class DoanhNghiepController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $doanhnghiep = DoanhNghiep::where('Email', $user->email)->first();
        return view('doanhnghiep.dashboard', compact('doanhnghiep'));
    }

    public function index()
    {
        $dsDoanhNghiep = DoanhNghiep::all();
        return view('doanhnghiep.index', compact('dsDoanhNghiep'));
    }

    public function create()
    {
        return view('doanhnghiep.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaDoanhNghiep' => 'required|unique:doanh_nghiep,MaDoanhNghiep',
            'TenDoanhNghiep' => 'required'
        ]);
        DoanhNghiep::create($request->all());
        return redirect()->route('doanhnghiep.index')->with('success', 'Thêm Doanh Nghiệp thành công!');
    }

    public function show($id)
    {
        $doanhnghiep = DoanhNghiep::findOrFail($id);
        return view('doanhnghiep.show', compact('doanhnghiep'));
    }

    public function edit($id)
    {
        $doanhnghiep = DoanhNghiep::findOrFail($id);
        return view('doanhnghiep.edit', compact('doanhnghiep'));
    }

    public function update(Request $request, $id)
    {
        $doanhnghiep = DoanhNghiep::findOrFail($id);
        $request->validate([
            'TenDoanhNghiep' => 'required'
        ]);
        $doanhnghiep->update($request->all());
        return redirect()->route('doanhnghiep.index')->with('success', 'Cập nhật Doanh Nghiệp thành công!');
    }

    public function destroy($id)
    {
        $doanhnghiep = DoanhNghiep::findOrFail($id);
        $doanhnghiep->delete();
        return redirect()->route('doanhnghiep.index')->with('success', 'Xóa Doanh Nghiệp thành công!');
    }
}
