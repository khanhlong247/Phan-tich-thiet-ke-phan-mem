@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chi tiết Giảng Viên</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Mã Giảng Viên:</strong> {{ $giangvien->MaGiangVien }}</p>
            <p><strong>Tên Giảng Viên:</strong> {{ $giangvien->TenGiangVien }}</p>
            <p><strong>Email:</strong> {{ $giangvien->Email }}</p>
            <p><strong>Chuyên ngành:</strong> {{ $giangvien->ChuyenNganh }}</p>
            <!-- Các thông tin khác nếu cần -->
        </div>
    </div>
    <a href="{{ route('giangvien.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
