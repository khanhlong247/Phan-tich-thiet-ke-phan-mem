<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NamHoc;
use Illuminate\Http\Request;

class NamHocApiController extends Controller
{
    public function index()
    {
        return response()->json(NamHoc::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaNamHoc' => 'required|unique:nam_hoc,MaNamHoc',
            'TenNamHoc' => 'required',
            'KhoaChuyenMon' => 'required',
            'ThoiGianBatDau' => 'required|date',
            'ThoiGianKetThuc' => 'required|date'
        ]);
        $namHoc = NamHoc::create($request->all());
        return response()->json($namHoc, 201);
    }

    public function show($id)
    {
        $namHoc = NamHoc::find($id);
        if (!$namHoc) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        return response()->json($namHoc, 200);
    }

    public function update(Request $request, $id)
    {
        $namHoc = NamHoc::find($id);
        if (!$namHoc) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        $namHoc->update($request->all());
        return response()->json($namHoc, 200);
    }

    public function destroy($id)
    {
        $namHoc = NamHoc::find($id);
        if (!$namHoc) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        $namHoc->delete();
        return response()->json(['message' => 'Xóa thành công'], 200);
    }
}
