<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DoanhNghiep;
use Illuminate\Http\Request;

class DoanhNghiepApiController extends Controller
{
    /**
     * Lấy danh sách tất cả các doanh nghiệp.
     */
    public function index()
    {
        $doanhNghiep = DoanhNghiep::all();
        return response()->json($doanhNghiep, 200);
    }

    /**
     * Lưu thông tin doanh nghiệp mới.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'MaDoanhNghiep'  => 'required|unique:doanh_nghiep,MaDoanhNghiep',
            'TenDoanhNghiep' => 'required',
            'DiaChi'         => 'required',
            'Email'          => 'required|email|unique:doanh_nghiep,Email',
            'SoDienThoai'    => 'required',
        ]);

        $doanhNghiep = DoanhNghiep::create($validatedData);
        return response()->json($doanhNghiep, 201);
    }

    /**
     * Hiển thị thông tin chi tiết của một doanh nghiệp.
     */
    public function show($id)
    {
        $doanhNghiep = DoanhNghiep::find($id);
        if (!$doanhNghiep) {
            return response()->json(['message' => 'Doanh nghiệp không tồn tại'], 404);
        }
        return response()->json($doanhNghiep, 200);
    }

    /**
     * Cập nhật thông tin của một doanh nghiệp.
     */
    public function update(Request $request, $id)
    {
        $doanhNghiep = DoanhNghiep::find($id);
        if (!$doanhNghiep) {
            return response()->json(['message' => 'Doanh nghiệp không tồn tại'], 404);
        }

        $validatedData = $request->validate([
            'TenDoanhNghiep' => 'required',
            'DiaChi'         => 'required',
            'Email'          => 'required|email|unique:doanh_nghiep,Email,'.$id.',MaDoanhNghiep',
            'SoDienThoai'    => 'required',
        ]);

        $doanhNghiep->update($validatedData);
        return response()->json($doanhNghiep, 200);
    }

    /**
     * Xóa thông tin của một doanh nghiệp.
     */
    public function destroy($id)
    {
        $doanhNghiep = DoanhNghiep::find($id);
        if (!$doanhNghiep) {
            return response()->json(['message' => 'Doanh nghiệp không tồn tại'], 404);
        }
        $doanhNghiep->delete();
        return response()->json(['message' => 'Xóa doanh nghiệp thành công'], 200);
    }
}
