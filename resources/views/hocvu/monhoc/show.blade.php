@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Chi tiết Môn Học</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Mã Môn Học:</strong> {{ $monhoc->MaMonHoc }}</p>
            <p><strong>Tên Môn Học:</strong> {{ $monhoc->TenMonHoc }}</p>
            <p><strong>Số Tin Chỉ:</strong> {{ $monhoc->SoTinChi }}</p>
            <p><strong>Học Kỳ Hiện Tại:</strong> {{ $monhoc->HocKyHienTai }}</p>
            <p><strong>Thời gian bắt đầu:</strong> {{ $monhoc->ThoiGianBatDau }}</p>
            <p><strong>Thời gian kết thúc:</strong> {{ $monhoc->ThoiGianKetThuc }}</p>
        </div>
    </div>
    <a href="{{ route('monhoc.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
