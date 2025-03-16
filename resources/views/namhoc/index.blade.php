@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Năm Học</h2>
    <a href="{{ route('namhoc.create') }}" class="btn btn-success mb-3">Thêm Năm Học</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã Năm Học</th>
                <th>Tên Năm Học</th>
                <th>Khoa Chuyên Môn</th>
                <th>Thời gian bắt đầu</th>
                <th>Thời gian kết thúc</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dsNamHoc as $nh)
            <tr>
                <td>{{ $nh->MaNamHoc }}</td>
                <td>{{ $nh->TenNamHoc }}</td>
                <td>{{ $nh->KhoaChuyenMon }}</td>
                <td>{{ $nh->ThoiGianBatDau }}</td>
                <td>{{ $nh->ThoiGianKetThuc }}</td>
                <td>
                    <a href="{{ route('namhoc.edit', $nh->MaNamHoc) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <form action="{{ route('namhoc.destroy', $nh->MaNamHoc) }}" method="POST" style="display:inline;">
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
