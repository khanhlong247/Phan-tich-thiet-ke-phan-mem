@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm Giảng Viên</h2>
    <form action="{{ route('giangvien.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="MaGiangVien" class="form-label">Mã Giảng Viên</label>
            <input type="text" name="MaGiangVien" class="form-control" id="MaGiangVien" required>
        </div>
        <div class="mb-3">
            <label for="TenGiangVien" class="form-label">Tên Giảng Viên</label>
            <input type="text" name="TenGiangVien" class="form-control" id="TenGiangVien" required>
        </div>
        <div class="mb-3">
            <label for="ChuyenNganh" class="form-label">Chuyên Ngành</label>
            <input type="text" name="ChuyenNganh" class="form-control" id="ChuyenNganh" required>
        </div>
        <div class="mb-3">
            <label for="NgaySinh" class="form-label">Ngày Sinh</label>
            <input type="date" name="NgaySinh" class="form-control" id="NgaySinh" required>
        </div>
        <div class="mb-3">
            <label for="GioiTinh" class="form-label">Giới Tính</label>
            <select name="GioiTinh" id="GioiTinh" class="form-control" required>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="SoDienThoai" class="form-label">Số điện thoại</label>
            <input type="text" name="SoDienThoai" class="form-control" id="SoDienThoai" required>
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Email" class="form-control" id="Email" required>
        </div>
        <div class="mb-3">
            <label for="DiaChi" class="form-label">Địa chỉ</label>
            <input type="text" name="DiaChi" class="form-control" id="DiaChi" required>
        </div>
        <div class="mb-3">
            <label for="HocVi" class="form-label">Học Vị</label>
            <input type="text" name="HocVi" class="form-control" id="HocVi" required>
        </div>
        <div class="mb-3">
            <label for="LoaiHopDong" class="form-label">Loại Hợp Đồng</label>
            <input type="text" name="LoaiHopDong" class="form-control" id="LoaiHopDong" required>
        </div>
        <div class="mb-3">
            <label for="KhoaChuyenMon" class="form-label">Mã Khoa Chuyên Môn</label>
            <input type="text" name="KhoaChuyenMon" class="form-control" id="KhoaChuyenMon" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('giangvien.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
