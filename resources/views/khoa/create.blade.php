@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm Khoa</h2>
    <form action="{{ route('khoa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="MaKhoa" class="form-label">Mã Khoa</label>
            <input type="text" name="MaKhoa" class="form-control" id="MaKhoa" required>
        </div>
        <div class="mb-3">
            <label for="TenKhoa" class="form-label">Tên Khoa</label>
            <input type="text" name="TenKhoa" class="form-control" id="TenKhoa" required>
        </div>
        <div class="mb-3">
            <label for="DiaChiVanPhong" class="form-label">Địa chỉ văn phòng</label>
            <input type="text" name="DiaChiVanPhong" class="form-control" id="DiaChiVanPhong">
        </div>
        <div class="mb-3">
            <label for="SoDienThoai" class="form-label">Số điện thoại</label>
            <input type="text" name="SoDienThoai" class="form-control" id="SoDienThoai">
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('khoa.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
