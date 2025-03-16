@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chi tiết Năm Học</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Mã Năm Học:</strong> {{ $namhoc->MaNamHoc }}</p>
            <p><strong>Tên Năm Học:</strong> {{ $namhoc->TenNamHoc }}</p>
            <p><strong>Khoa Chuyên Môn:</strong> {{ $namhoc->KhoaChuyenMon }}</p>
            <p><strong>Thời gian bắt đầu:</strong> {{ $namhoc->ThoiGianBatDau }}</p>
            <p><strong>Thời gian kết thúc:</strong> {{ $namhoc->ThoiGianKetThuc }}</p>
        </div>
    </div>
    <a href="{{ route('namhoc.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
