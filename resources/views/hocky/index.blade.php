@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Học Kỳ</h2>
    <a href="{{ route('hocky.create') }}" class="btn btn-success mb-3">Thêm Học Kỳ</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã Học Kỳ</th>
                <th>Tên Học Kỳ</th>
                <th>Năm Học Hiện Tại</th>
                <th>Thời gian bắt đầu</th>
                <th>Thời gian kết thúc</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dsHocKy as $hk)
            <tr>
                <td>{{ $hk->MaHocKy }}</td>
                <td>{{ $hk->TenHocKy }}</td>
                <td>{{ $hk->NamHocHienTai }}</td>
                <td>{{ $hk->ThoiGianBatDau }}</td>
                <td>{{ $hk->ThoiGianKetThuc }}</td>
                <td>
                    <a href="{{ route('hocky.edit', $hk->MaHocKy) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <form action="{{ route('hocky.destroy', $hk->MaHocKy) }}" method="POST" style="display:inline;">
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
