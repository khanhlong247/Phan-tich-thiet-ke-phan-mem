<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Khoa;
use Illuminate\Http\Request;

class KhoaApiController extends Controller
{
    public function index()
    {
        return response()->json(Khoa::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaKhoa' => 'required|unique:khoa,MaKhoa',
            'TenKhoa' => 'required'
        ]);
        $khoa = Khoa::create($request->all());
        return response()->json($khoa, 201);
    }

    public function show($id)
    {
        $khoa = Khoa::find($id);
        if (!$khoa) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        return response()->json($khoa, 200);
    }

    public function update(Request $request, $id)
    {
        $khoa = Khoa::find($id);
        if (!$khoa) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        $khoa->update($request->all());
        return response()->json($khoa, 200);
    }

    public function destroy($id)
    {
        $khoa = Khoa::find($id);
        if (!$khoa) {
            return response()->json(['message' => 'Không tìm thấy'], 404);
        }
        $khoa->delete();
        return response()->json(['message' => 'Xóa thành công'], 200);
    }
}
