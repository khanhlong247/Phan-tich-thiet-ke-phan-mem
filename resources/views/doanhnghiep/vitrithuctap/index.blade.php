@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Vị trí Thực tập của Doanh nghiệp</h2>
    <a href="{{ route('doanhnghiep.vitrithethap.create') }}" class="btn btn-success mb-3">Thêm Vị trí Thực tập</a>
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
                <th>Trạng thái duyệt</th>
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
                    <a href="{{ route('doanhnghiep.vitrithethap.show', $vt->MaViTriThucTap) }}" class="btn btn-info btn-sm">Chi tiết</a>
                    <a href="{{ route('doanhnghiep.vitrithethap.edit', $vt->MaViTriThucTap) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <form action="{{ route('doanhnghiep.vitrithethap.destroy', $vt->MaViTriThucTap) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
