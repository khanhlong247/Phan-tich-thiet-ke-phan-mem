@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm Doanh Nghiệp</h2>
    <form action="{{ route('doanhnghiep.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="MaDoanhNghiep" class="form-label">Mã Doanh Nghiệp</label>
            <input type="text" name="MaDoanhNghiep" class="form-control" id="MaDoanhNghiep" required>
        </div>
        <div class="mb-3">
            <label for="TenDoanhNghiep" class="form-label">Tên Doanh Nghiệp</label>
            <input type="text" name="TenDoanhNghiep" class="form-control" id="TenDoanhNghiep" required>
        </div>
        <div class="mb-3">
            <label for="DiaChi" class="form-label">Địa chỉ</label>
            <input type="text" name="DiaChi" class="form-control" id="DiaChi" required>
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Email" class="form-control" id="Email" required>
        </div>
        <div class="mb-3">
            <label for="SoDienThoai" class="form-label">Số điện thoại</label>
            <input type="text" name="SoDienThoai" class="form-control" id="SoDienThoai" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('doanhnghiep.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
