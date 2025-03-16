@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gửi Thông tin Vị trí Thực tập</h2>
    <form action="{{ route('doanhnghiep.vitrithethap.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="TenViTriThucTap" class="form-label">Tên Vị trí Thực tập</label>
            <input type="text" name="TenViTriThucTap" class="form-control" id="TenViTriThucTap" required>
        </div>
        <div class="mb-3">
            <label for="MoTa" class="form-label">Mô tả công việc</label>
            <textarea name="MoTa" class="form-control" id="MoTa" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="YeuCauDauVao" class="form-label">Yêu cầu đầu vào</label>
            <textarea name="YeuCauDauVao" class="form-control" id="YeuCauDauVao" rows="2"></textarea>
        </div>
        <div class="mb-3">
            <label for="ThoiGianThucTap" class="form-label">Thời gian thực tập</label>
            <input type="text" name="ThoiGianThucTap" class="form-control" id="ThoiGianThucTap" required>
        </div>
        <div class="mb-3">
            <label for="DiaDiemThucTap" class="form-label">Địa điểm thực tập</label>
            <input type="text" name="DiaDiemThucTap" class="form-control" id="DiaDiemThucTap" required>
        </div>
        <div class="mb-3">
            <label for="SoLuongTuyenDung" class="form-label">Số lượng tuyển dụng</label>
            <input type="number" name="SoLuongTuyenDung" class="form-control" id="SoLuongTuyenDung" required>
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
        <a href="{{ route('doanhnghiep.vitrithethap.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
