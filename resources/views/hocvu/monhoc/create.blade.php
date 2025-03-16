@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm Môn Học</h2>
    <form action="{{ route('monhoc.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="MaMonHoc" class="form-label">Mã Môn Học</label>
            <input type="text" name="MaMonHoc" class="form-control" id="MaMonHoc" required>
        </div>
        <div class="mb-3">
            <label for="TenMonHoc" class="form-label">Tên Môn Học</label>
            <input type="text" name="TenMonHoc" class="form-control" id="TenMonHoc" required>
        </div>
        <div class="mb-3">
            <label for="SoTinChi" class="form-label">Số Tin Chỉ</label>
            <input type="number" name="SoTinChi" class="form-control" id="SoTinChi" required>
        </div>
        <div class="mb-3">
            <label for="HocKyHienTai" class="form-label">Học Kỳ Hiện Tại</label>
            <input type="text" name="HocKyHienTai" class="form-control" id="HocKyHienTai" required>
        </div>
        <div class="mb-3">
            <label for="ThoiGianBatDau" class="form-label">Thời gian bắt đầu</label>
            <input type="date" name="ThoiGianBatDau" class="form-control" id="ThoiGianBatDau" required>
        </div>
        <div class="mb-3">
            <label for="ThoiGianKetThuc" class="form-label">Thời gian kết thúc</label>
            <input type="date" name="ThoiGianKetThuc" class="form-control" id="ThoiGianKetThuc" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('monhoc.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
