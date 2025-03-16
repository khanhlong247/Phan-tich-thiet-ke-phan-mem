@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Vị trí Thực tập (Admin duyệt)</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã vị trí</th>
                <th>Tên vị trí</th>
                <th>Địa điểm</th>
                <th>Số lượng tuyển dụng</th>
                <th>Trạng thái</th>
                <th>Gán giảng viên</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dsViTri as $vt)
            <tr>
                <td>{{ $vt->MaViTriThucTap }}</td>
                <td>{{ $vt->TenViTriThucTap }}</td>
                <td>{{ $vt->DiaDiemThucTap }}</td>
                <td>{{ $vt->SoLuongTuyenDung }}</td>
                <td>{{ $vt->TrangThai ?? 'Chờ duyệt' }}</td>
                <td>
                    @if(!$vt->GiangVienHuongDan)
                        <a href="{{ route('admin.vitrithethap.assign', $vt->MaViTriThucTap) }}" class="btn btn-warning btn-sm">Gán GV</a>
                    @else
                        {{ $vt->GiangVienHuongDan }}
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.vitrithethap.show', $vt->MaViTriThucTap) }}" class="btn btn-info btn-sm">Chi tiết</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
