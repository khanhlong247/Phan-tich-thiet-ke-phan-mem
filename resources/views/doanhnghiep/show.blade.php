@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chi tiết Doanh Nghiệp</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Mã Doanh Nghiệp:</strong> {{ $doanhnghiep->MaDoanhNghiep }}</p>
            <p><strong>Tên Doanh Nghiệp:</strong> {{ $doanhnghiep->TenDoanhNghiep }}</p>
            <p><strong>Email:</strong> {{ $doanhnghiep->Email }}</p>
            <p><strong>Địa chỉ:</strong> {{ $doanhnghiep->DiaChi }}</p>
            <p><strong>Số điện thoại:</strong> {{ $doanhnghiep->SoDienThoai }}</p>
        </div>
    </div>
    <a href="{{ route('doanhnghiep.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
