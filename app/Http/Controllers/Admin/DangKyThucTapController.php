<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonDangKyThucTap;
use Illuminate\Http\Request;

class DangKyThucTapController extends Controller
{
    public function index()
    {
        $dsDonDK = DonDangKyThucTap::all();
        return view('admin.dangkythuctap.index', compact('dsDonDK'));
    }

    public function show($id)
    {
        $don = DonDangKyThucTap::findOrFail($id);
        return view('admin.dangkythuctap.show', compact('don'));
    }

    public function approve($id)
    {
        $don = DonDangKyThucTap::findOrFail($id);
        $don->TrangThai = 'Được duyệt';
        $don->save();
        return redirect()->route('admin.dangkythuctap.index')->with('success', 'Phê duyệt thành công!');
    }

    public function reject($id)
    {
        $don = DonDangKyThucTap::findOrFail($id);
        $don->TrangThai = 'Bị từ chối';
        $don->save();
        return redirect()->route('admin.dangkythuctap.index')->with('success', 'Từ chối đơn đăng ký!');
    }
}
