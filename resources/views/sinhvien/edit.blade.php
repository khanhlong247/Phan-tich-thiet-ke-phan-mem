@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chỉnh sửa Sinh Viên</h2>
    <form action="{{ route('sinhvien.update', $sinhvien->MaSinhVien) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="MaSinhVien" class="form-label">Mã Sinh Viên</label>
            <input type="text" name="MaSinhVien" class="form-control" id="MaSinhVien" value="{{ $sinhvien->MaSinhVien }}" readonly>
        </div>
        <div class="mb-3">
            <label for="TenSinhVien" class="form-label">Tên Sinh Viên</label>
            <input type="text" name="TenSinhVien" class="form-control" id="TenSinhVien" value="{{ $sinhvien->TenSinhVien }}" required>
        </div>
        <div class="mb-3">
            <label for="NgaySinh" class="form-label">Ngày Sinh</label>
            <input type="date" name="NgaySinh" class="form-control" id="NgaySinh" value="{{ $sinhvien->NgaySinh }}" required>
        </div>
        <div class="mb-3">
            <label for="GioiTinh" class="form-label">Giới Tính</label>
            <select name="GioiTinh" id="GioiTinh" class="form-control" required>
                <option value="Nam" {{ $sinhvien->GioiTinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                <option value="Nữ" {{ $sinhvien->GioiTinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="DiaChi" class="form-label">Địa chỉ</label>
            <input type="text" name="DiaChi" class="form-control" id="DiaChi" value="{{ $sinhvien->DiaChi }}" required>
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Email" class="form-control" id="Email" value="{{ $sinhvien->Email }}" required>
        </div>
        <div class="mb-3">
            <label for="SoDienThoai" class="form-label">Số điện thoại</label>
            <input type="text" name="SoDienThoai" class="form-control" id="SoDienThoai" value="{{ $sinhvien->SoDienThoai }}" required>
        </div>
        <div class="mb-3">
            <label for="NganhHoc" class="form-label">Nghành học</label>
            <input type="text" name="NganhHoc" class="form-control" id="NganhHoc" value="{{ $sinhvien->NganhHoc }}" required>
        </div>
        <div class="mb-3">
            <label for="NienKhoa" class="form-label">Niên Khóa</label>
            <input type="text" name="NienKhoa" class="form-control" id="NienKhoa" value="{{ $sinhvien->NienKhoa }}" required>
        </div>
        <div class="mb-3">
            <label for="GPA" class="form-label">GPA</label>
            <input type="number" step="0.01" name="GPA" class="form-control" id="GPA" value="{{ $sinhvien->GPA }}">
        </div>
        <div class="mb-3">
            <label for="SoHocPhanTichLuy" class="form-label">Số học phần tích lũy</label>
            <input type="number" name="SoHocPhanTichLuy" class="form-control" id="SoHocPhanTichLuy" value="{{ $sinhvien->SoHocPhanTichLuy }}" required>
        </div>
        <div class="mb-3">
            <label for="SoHocPhanNo" class="form-label">Số học phần nợ</label>
            <input type="number" name="SoHocPhanNo" class="form-control" id="SoHocPhanNo" value="{{ $sinhvien->SoHocPhanNo }}">
        </div>
        <div class="mb-3">
            <label for="TinhTrangHocTap" class="form-label">Tình trạng học tập</label>
            <select name="TinhTrangHocTap" id="TinhTrangHocTap" class="form-control" required>
                <option value="Đang học" {{ $sinhvien->TinhTrangHocTap == 'Đang học' ? 'selected' : '' }}>Đang học</option>
                <option value="Nghỉ học" {{ $sinhvien->TinhTrangHocTap == 'Nghỉ học' ? 'selected' : '' }}>Nghỉ học</option>
                <option value="Bảo lưu" {{ $sinhvien->TinhTrangHocTap == 'Bảo lưu' ? 'selected' : '' }}>Bảo lưu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="KhoaChuyenMon" class="form-label">Mã Khoa Chuyên Môn</label>
            <input type="text" name="KhoaChuyenMon" class="form-control" id="KhoaChuyenMon" value="{{ $sinhvien->KhoaChuyenMon }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('sinhvien.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
