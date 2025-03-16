@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chỉnh sửa Môn Học</h2>
    <form action="{{ route('monhoc.update', $monhoc->MaMonHoc) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="MaMonHoc" class="form-label">Mã Môn Học</label>
            <input type="text" name="MaMonHoc" class="form-control" id="MaMonHoc" value="{{ $monhoc->MaMonHoc }}" readonly>
        </div>
        <div class="mb-3">
            <label for="TenMonHoc" class="form-label">Tên Môn Học</label>
            <input type="text" name="TenMonHoc" class="form-control" id="TenMonHoc" value="{{ $monhoc->TenMonHoc }}" required>
        </div>
        <div class="mb-3">
            <label for="SoTinChi" class="form-label">Số Tin Chỉ</label>
            <input type="number" name="SoTinChi" class="form-control" id="SoTinChi" value="{{ $monhoc->SoTinChi }}" required>
        </div>
        <div class="mb-3">
            <label for="HocKyHienTai" class="form-label">Học Kỳ Hiện Tại</label>
            <input type="text" name="HocKyHienTai" class="form-control" id="HocKyHienTai" value="{{ $monhoc->HocKyHienTai }}" required>
        </div>
        <div class="mb-3">
            <label for="ThoiGianBatDau" class="form-label">Thời gian bắt đầu</label>
            <input type="date" name="ThoiGianBatDau" class="form-control" id="ThoiGianBatDau" value="{{ $monhoc->ThoiGianBatDau }}" required>
        </div>
        <div class="mb-3">
            <label for="ThoiGianKetThuc" class="form-label">Thời gian kết thúc</label>
            <input type="date" name="ThoiGianKetThuc" class="form-control" id="ThoiGianKetThuc" value="{{ $monhoc->ThoiGianKetThuc }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('monhoc.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
