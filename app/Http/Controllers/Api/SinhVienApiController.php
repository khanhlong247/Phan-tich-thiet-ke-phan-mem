<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SinhVien;
use Illuminate\Http\Request;

class SinhVienApiController extends Controller
{
    public function index()
    {
        return response()->json(SinhVien::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaSinhVien' => 'required|unique:sinh_vien,MaSinhVien',
            'TenSinhVien' => 'required',
            'Email' => 'required|email|unique:sinh_vien,Email',
            // Validate các trường khác nếu cần
        ]);
        $sinhVien = SinhVien::create($request->all());
        return response()->json($sinhVien, 201);
    }

    public function show($id)
    {
        $sinhVien = SinhVien::find($id);
        if (!$sinhVien) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        return response()->json($sinhVien, 200);
    }

    public function update(Request $request, $id)
    {
        $sinhVien = SinhVien::find($id);
        if (!$sinhVien) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        $sinhVien->update($request->all());
        return response()->json($sinhVien, 200);
    }

    public function destroy($id)
    {
        $sinhVien = SinhVien::find($id);
        if (!$sinhVien) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        $sinhVien->delete();
        return response()->json(['message' => 'Xóa thành công'], 200);
    }
}
