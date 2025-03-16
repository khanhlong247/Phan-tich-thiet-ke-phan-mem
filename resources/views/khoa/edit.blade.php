@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chỉnh sửa Khoa</h2>
    <form action="{{ route('khoa.update', $khoa->MaKhoa) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="MaKhoa" class="form-label">Mã Khoa</label>
            <input type="text" name="MaKhoa" class="form-control" id="MaKhoa" value="{{ $khoa->MaKhoa }}" readonly>
        </div>
        <div class="mb-3">
            <label for="TenKhoa" class="form-label">Tên Khoa</label>
            <input type="text" name="TenKhoa" class="form-control" id="TenKhoa" value="{{ $khoa->TenKhoa }}" required>
        </div>
        <div class="mb-3">
            <label for="DiaChiVanPhong" class="form-label">Địa chỉ văn phòng</label>
            <input type="text" name="DiaChiVanPhong" class="form-control" id="DiaChiVanPhong" value="{{ $khoa->DiaChiVanPhong }}">
        </div>
        <div class="mb-3">
            <label for="SoDienThoai" class="form-label">Số điện thoại</label>
            <input type="text" name="SoDienThoai" class="form-control" id="SoDienThoai" value="{{ $khoa->SoDienThoai }}">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('khoa.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
