@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Trạng thái Đơn đăng ký Thực tập</h2>
    @if($donDK)
        <div class="card">
            <div class="card-body">
                <p><strong>Mã Đơn:</strong> {{ $donDK->MaDonDKTT }}</p>
                <p><strong>Trạng thái:</strong> {{ $donDK->TrangThai }}</p>
                <p><strong>Ghi chú:</strong> {{ $donDK->GhiChu ?? 'Không có ghi chú' }}</p>
            </div>
        </div>
    @else
        <p>Chưa có đơn đăng ký nào.</p>
    @endif
    <a href="{{ route('sinhvien.dangkythuctap.register') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
