@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chi tiết Khoa</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Mã Khoa:</strong> {{ $khoa->MaKhoa }}</p>
            <p><strong>Tên Khoa:</strong> {{ $khoa->TenKhoa }}</p>
            <p><strong>Địa chỉ văn phòng:</strong> {{ $khoa->DiaChiVanPhong }}</p>
            <p><strong>Số điện thoại:</strong> {{ $khoa->SoDienThoai }}</p>
        </div>
    </div>
    <a href="{{ route('khoa.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
