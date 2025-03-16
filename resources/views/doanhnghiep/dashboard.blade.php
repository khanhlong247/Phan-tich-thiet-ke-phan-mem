@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Doanh Nghiệp</h2>
    @if($doanhnghiep)
        <p>Chào mừng, {{ $doanhnghiep->TenDoanhNghiep }}!</p>
        <p>Email: {{ $doanhnghiep->Email }}</p>
        <!-- Thông tin bổ sung khác nếu cần -->
    @else
        <p>Không tìm thấy thông tin doanh nghiệp.</p>
    @endif
</div>
@endsection
