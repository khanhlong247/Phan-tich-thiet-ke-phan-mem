@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chi tiết Đơn đăng ký Thực tập</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Mã Đơn:</strong> {{ $don->MaDonDKTT }}</p>
            <p><strong>Mã Sinh Viên:</strong> {{ $don->SinhVienThucTap }}</p>
            <p><strong>Vị trí đăng ký:</strong> {{ $don->ViTriThucTap }}</p>
            <p><strong>Trạng thái:</strong> {{ $don->TrangThai }}</p>
            <p><strong>Ghi chú:</strong> {{ $don->GhiChu ?? 'Không có ghi chú' }}</p>
        </div>
    </div>
    <div class="mt-3">
        <a href="{{ route('admin.dangkythuctap.approve', $don->MaDonDKTT) }}" class="btn btn-success">Phê duyệt</a>
        <a href="{{ route('admin.dangkythuctap.reject', $don->MaDonDKTT) }}" class="btn btn-danger">Từ chối</a>
    </div>
    <a href="{{ route('admin.dangkythuctap.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
