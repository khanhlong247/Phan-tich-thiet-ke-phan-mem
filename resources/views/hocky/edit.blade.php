@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chỉnh sửa Học Kỳ</h2>
    <form action="{{ route('hocky.update', $hocky->MaHocKy) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="MaHocKy" class="form-label">Mã Học Kỳ</label>
            <input type="text" name="MaHocKy" class="form-control" id="MaHocKy" value="{{ $hocky->MaHocKy }}" readonly>
        </div>
        <div class="mb-3">
            <label for="TenHocKy" class="form-label">Tên Học Kỳ</label>
            <input type="text" name="TenHocKy" class="form-control" id="TenHocKy" value="{{ $hocky->TenHocKy }}" required>
        </div>
        <div class="mb-3">
            <label for="NamHocHienTai" class="form-label">Năm Học Hiện Tại</label>
            <input type="text" name="NamHocHienTai" class="form-control" id="NamHocHienTai" value="{{ $hocky->NamHocHienTai }}" required>
        </div>
        <div class="mb-3">
            <label for="ThoiGianBatDau" class="form-label">Thời gian bắt đầu</label>
            <input type="date" name="ThoiGianBatDau" class="form-control" id="ThoiGianBatDau" value="{{ $hocky->ThoiGianBatDau }}" required>
        </div>
        <div class="mb-3">
            <label for="ThoiGianKetThuc" class="form-label">Thời gian kết thúc</label>
            <input type="date" name="ThoiGianKetThuc" class="form-control" id="ThoiGianKetThuc" value="{{ $hocky->ThoiGianKetThuc }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('hocky.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
