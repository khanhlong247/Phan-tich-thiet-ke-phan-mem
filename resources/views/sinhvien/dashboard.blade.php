@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Sinh Viên</h2>
    @if($sinhvien)
        <p>Chào mừng, {{ $sinhvien->TenSinhVien }}!</p>
        <p>Email: {{ $sinhvien->Email }}</p>
        <!-- Các thông tin bổ sung khác nếu cần -->
    @else
        <p>Không tìm thấy thông tin sinh viên.</p>
    @endif
</div>
@endsection
