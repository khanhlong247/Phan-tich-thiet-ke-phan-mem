@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Giảng Viên</h2>
    @if($giangvien)
        <p>Chào mừng, {{ $giangvien->TenGiangVien }}!</p>
        <p>Email: {{ $giangvien->Email }}</p>
        <!-- Thông tin bổ sung khác nếu cần -->
    @else
        <p>Không tìm thấy thông tin giảng viên.</p>
    @endif
</div>
@endsection
