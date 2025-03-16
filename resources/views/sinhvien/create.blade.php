@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm Sinh Viên</h2>
    <form action="{{ route('sinhvien.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="MaSinhVien" class="form-label">Mã Sinh Viên</label>
            <input type="text" name="MaSinhVien" class="form-control" id="MaSinhVien" required>
        </div>
        <div class="mb-3">
            <label for="TenSinhVien" class="form-label">Tên Sinh Viên</label>
            <input type="text" name="TenSinhVien" class="form-control" id="TenSinhVien" required>
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
        <div class="mb-3">
            <label for="NganhHoc" class="form-label">Nghành học</label>
            <input type="text" name="NganhHoc" class="form-control" id="NganhHoc" required>
        </div>
        <div class="mb-3">
            <label for="NienKhoa" class="form-label">Niên Khóa</label>
            <input type="text" name="NienKhoa" class="form-control" id="NienKhoa" required>
        </div>
        <div class="mb-3">
            <label for="GPA" class="form-label">GPA</label>
            <input type="number" step="0.01" name="GPA" class="form-control" id="GPA">
        </div>
        <div class="mb-3">
            <label for="SoHocPhanTichLuy" class="form-label">Số học phần tích lũy</label>
            <input type="number" name="SoHocPhanTichLuy" class="form-control" id="SoHocPhanTichLuy" required>
        </div>
        <div class="mb-3">
            <label for="SoHocPhanNo" class="form-label">Số học phần nợ</label>
            <input type="number" name="SoHocPhanNo" class="form-control" id="SoHocPhanNo">
        </div>
        <div class="mb-3">
            <label for="TinhTrangHocTap" class="form-label">Tình trạng học tập</label>
            <select name="TinhTrangHocTap" id="TinhTrangHocTap" class="form-control" required>
                <option value="Đang học">Đang học</option>
                <option value="Nghỉ học">Nghỉ học</option>
                <option value="Bảo lưu">Bảo lưu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="KhoaChuyenMon" class="form-label">Mã Khoa Chuyên Môn</label>
            <input type="text" name="KhoaChuyenMon" class="form-control" id="KhoaChuyenMon" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('sinhvien.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
