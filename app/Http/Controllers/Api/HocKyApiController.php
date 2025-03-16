<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HocKy;
use Illuminate\Http\Request;

class HocKyApiController extends Controller
{
    public function index()
    {
        return response()->json(HocKy::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaHocKy' => 'required|unique:hoc_ky,MaHocKy',
            'TenHocKy' => 'required',
            'NamHocHienTai' => 'required',
            'ThoiGianBatDau' => 'required|date',
            'ThoiGianKetThuc' => 'required|date'
        ]);
        $hocKy = HocKy::create($request->all());
        return response()->json($hocKy, 201);
    }

    public function show($id)
    {
        $hocKy = HocKy::find($id);
        if (!$hocKy) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        return response()->json($hocKy, 200);
    }

    public function update(Request $request, $id)
    {
        $hocKy = HocKy::find($id);
        if (!$hocKy) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        $hocKy->update($request->all());
        return response()->json($hocKy, 200);
    }

    public function destroy($id)
    {
        $hocKy = HocKy::find($id);
        if (!$hocKy) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        $hocKy->delete();
        return response()->json(['message' => 'Xóa thành công'], 200);
    }
}
