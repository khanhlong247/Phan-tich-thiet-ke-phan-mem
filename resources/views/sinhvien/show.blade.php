@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chi tiết Sinh Viên</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Mã Sinh Viên:</strong> {{ $sinhvien->MaSinhVien }}</p>
            <p><strong>Tên Sinh Viên:</strong> {{ $sinhvien->TenSinhVien }}</p>
            <p><strong>Email:</strong> {{ $sinhvien->Email }}</p>
            <p><strong>Nghành học:</strong> {{ $sinhvien->NganhHoc }}</p>
            <!-- Các thông tin khác nếu cần -->
        </div>
    </div>
    <a href="{{ route('sinhvien.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
