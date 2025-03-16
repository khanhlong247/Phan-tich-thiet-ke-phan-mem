@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm Năm Học</h2>
    <form action="{{ route('namhoc.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="MaNamHoc" class="form-label">Mã Năm Học</label>
            <input type="text" name="MaNamHoc" class="form-control" id="MaNamHoc" required>
        </div>
        <div class="mb-3">
            <label for="TenNamHoc" class="form-label">Tên Năm Học</label>
            <input type="text" name="TenNamHoc" class="form-control" id="TenNamHoc" required>
        </div>
        <div class="mb-3">
            <label for="KhoaChuyenMon" class="form-label">Khoa Chuyên Môn</label>
            <input type="text" name="KhoaChuyenMon" class="form-control" id="KhoaChuyenMon" required>
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
        <a href="{{ route('namhoc.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
