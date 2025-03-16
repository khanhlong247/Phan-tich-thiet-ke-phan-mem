<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GiangVien;
use Illuminate\Http\Request;

class GiangVienApiController extends Controller
{
    public function index()
    {
        return response()->json(GiangVien::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaGiangVien' => 'required|unique:giang_vien,MaGiangVien',
            'TenGiangVien' => 'required',
            'Email' => 'required|email|unique:giang_vien,Email',
            // Validate các trường khác nếu cần
        ]);
        $giangVien = GiangVien::create($request->all());
        return response()->json($giangVien, 201);
    }

    public function show($id)
    {
        $giangVien = GiangVien::find($id);
        if (!$giangVien) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        return response()->json($giangVien, 200);
    }

    public function update(Request $request, $id)
    {
        $giangVien = GiangVien::find($id);
        if (!$giangVien) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        $giangVien->update($request->all());
        return response()->json($giangVien, 200);
    }

    public function destroy($id)
    {
        $giangVien = GiangVien::find($id);
        if (!$giangVien) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        $giangVien->delete();
        return response()->json(['message' => 'Xóa thành công'], 200);
    }
}
