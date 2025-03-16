@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chỉnh sửa Giảng Viên</h2>
    <form action="{{ route('giangvien.update', $giangvien->MaGiangVien) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="MaGiangVien" class="form-label">Mã Giảng Viên</label>
            <input type="text" name="MaGiangVien" class="form-control" id="MaGiangVien" value="{{ $giangvien->MaGiangVien }}" readonly>
        </div>
        <div class="mb-3">
            <label for="TenGiangVien" class="form-label">Tên Giảng Viên</label>
            <input type="text" name="TenGiangVien" class="form-control" id="TenGiangVien" value="{{ $giangvien->TenGiangVien }}" required>
        </div>
        <div class="mb-3">
            <label for="ChuyenNganh" class="form-label">Chuyên Ngành</label>
            <input type="text" name="ChuyenNganh" class="form-control" id="ChuyenNganh" value="{{ $giangvien->ChuyenNganh }}" required>
        </div>
        <div class="mb-3">
            <label for="NgaySinh" class="form-label">Ngày Sinh</label>
            <input type="date" name="NgaySinh" class="form-control" id="NgaySinh" value="{{ $giangvien->NgaySinh }}" required>
        </div>
        <div class="mb-3">
            <label for="GioiTinh" class="form-label">Giới Tính</label>
            <select name="GioiTinh" id="GioiTinh" class="form-control" required>
                <option value="Nam" {{ $giangvien->GioiTinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                <option value="Nữ" {{ $giangvien->GioiTinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="SoDienThoai" class="form-label">Số điện thoại</label>
            <input type="text" name="SoDienThoai" class="form-control" id="SoDienThoai" value="{{ $giangvien->SoDienThoai }}" required>
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Email" class="form-control" id="Email" value="{{ $giangvien->Email }}" required>
        </div>
        <div class="mb-3">
            <label for="DiaChi" class="form-label">Địa chỉ</label>
            <input type="text" name="DiaChi" class="form-control" id="DiaChi" value="{{ $giangvien->DiaChi }}" required>
        </div>
        <div class="mb-3">
            <label for="HocVi" class="form-label">Học Vị</label>
            <input type="text" name="HocVi" class="form-control" id="HocVi" value="{{ $giangvien->HocVi }}" required>
        </div>
        <div class="mb-3">
            <label for="LoaiHopDong" class="form-label">Loại Hợp Đồng</label>
            <input type="text" name="LoaiHopDong" class="form-control" id="LoaiHopDong" value="{{ $giangvien->LoaiHopDong }}" required>
        </div>
        <div class="mb-3">
            <label for="KhoaChuyenMon" class="form-label">Mã Khoa Chuyên Môn</label>
            <input type="text" name="KhoaChuyenMon" class="form-control" id="KhoaChuyenMon" value="{{ $giangvien->KhoaChuyenMon }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('giangvien.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
