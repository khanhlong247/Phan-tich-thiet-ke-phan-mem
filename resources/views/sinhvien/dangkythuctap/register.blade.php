@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Đăng ký Thực tập</h2>
    {{-- Hiển thị danh sách các vị trí thực tập đã được duyệt --}}
    @if($dsViTriThucTap->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã vị trí</th>
                    <th>Tên vị trí</th>
                    <th>Địa điểm</th>
                    <th>Số lượng tuyển dụng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dsViTriThucTap as $vt)
                <tr>
                    <td>{{ $vt->MaViTriThucTap }}</td>
                    <td>{{ $vt->TenViTriThucTap }}</td>
                    <td>{{ $vt->DiaDiemThucTap }}</td>
                    <td>{{ $vt->SoLuongTuyenDung }}</td>
                    <td>
                        <a href="{{ route('sinhvien.dangkythuctap.registerForm', $vt->MaViTriThucTap) }}" class="btn btn-primary btn-sm">Đăng ký</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Hiện không có vị trí thực tập nào được duyệt.</p>
    @endif
</div>
@endsection
