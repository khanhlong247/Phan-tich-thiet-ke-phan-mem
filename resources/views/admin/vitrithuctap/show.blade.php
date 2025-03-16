@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chi tiết Vị trí Thực tập (Admin)</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Mã vị trí:</strong> {{ $vitri->MaViTriThucTap }}</p>
            <p><strong>Tên vị trí:</strong> {{ $vitri->TenViTriThucTap }}</p>
            <p><strong>Mô tả:</strong> {{ $vitri->MoTa }}</p>
            <p><strong>Yêu cầu:</strong> {{ $vitri->YeuCauDauVao }}</p>
            <p><strong>Thời gian thực tập:</strong> {{ $vitri->ThoiGianThucTap }}</p>
            <p><strong>Địa điểm:</strong> {{ $vitri->DiaDiemThucTap }}</p>
            <p><strong>Số lượng tuyển dụng:</strong> {{ $vitri->SoLuongTuyenDung }}</p>
            <p><strong>Trạng thái duyệt:</strong> {{ $vitri->TrangThai ?? 'Chờ duyệt' }}</p>
            <p><strong>Giảng viên hướng dẫn:</strong> {{ $vitri->GiangVienHuongDan ?? 'Chưa gán' }}</p>
        </div>
    </div>
    <a href="{{ route('admin.vitrithethap.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
