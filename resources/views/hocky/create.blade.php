@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm Học Kỳ</h2>
    <form action="{{ route('hocky.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="MaHocKy" class="form-label">Mã Học Kỳ</label>
            <input type="text" name="MaHocKy" class="form-control" id="MaHocKy" required>
        </div>
        <div class="mb-3">
            <label for="TenHocKy" class="form-label">Tên Học Kỳ</label>
            <input type="text" name="TenHocKy" class="form-control" id="TenHocKy" required>
        </div>
        <div class="mb-3">
            <label for="NamHocHienTai" class="form-label">Năm Học Hiện Tại</label>
            <input type="text" name="NamHocHienTai" class="form-control" id="NamHocHienTai" required>
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
        <a href="{{ route('hocky.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
