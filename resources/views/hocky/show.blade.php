@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chi tiết Học Kỳ</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Mã Học Kỳ:</strong> {{ $hocky->MaHocKy }}</p>
            <p><strong>Tên Học Kỳ:</strong> {{ $hocky->TenHocKy }}</p>
            <p><strong>Năm Học Hiện Tại:</strong> {{ $hocky->NamHocHienTai }}</p>
            <p><strong>Thời gian bắt đầu:</strong> {{ $hocky->ThoiGianBatDau }}</p>
            <p><strong>Thời gian kết thúc:</strong> {{ $hocky->ThoiGianKetThuc }}</p>
        </div>
    </div>
    <a href="{{ route('hocky.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
