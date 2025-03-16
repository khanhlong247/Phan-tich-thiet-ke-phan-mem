@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chỉnh sửa Doanh Nghiệp</h2>
    <form action="{{ route('doanhnghiep.update', $doanhnghiep->MaDoanhNghiep) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="MaDoanhNghiep" class="form-label">Mã Doanh Nghiệp</label>
            <input type="text" name="MaDoanhNghiep" class="form-control" id="MaDoanhNghiep" value="{{ $doanhnghiep->MaDoanhNghiep }}" readonly>
        </div>
        <div class="mb-3">
            <label for="TenDoanhNghiep" class="form-label">Tên Doanh Nghiệp</label>
            <input type="text" name="TenDoanhNghiep" class="form-control" id="TenDoanhNghiep" value="{{ $doanhnghiep->TenDoanhNghiep }}" required>
        </div>
        <div class="mb-3">
            <label for="DiaChi" class="form-label">Địa chỉ</label>
            <input type="text" name="DiaChi" class="form-control" id="DiaChi" value="{{ $doanhnghiep->DiaChi }}" required>
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Email" class="form-control" id="Email" value="{{ $doanhnghiep->Email }}" required>
        </div>
        <div class="mb-3">
            <label for="SoDienThoai" class="form-label">Số điện thoại</label>
            <input type="text" name="SoDienThoai" class="form-control" id="SoDienThoai" value="{{ $doanhnghiep->SoDienThoai }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('doanhnghiep.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
