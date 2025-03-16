@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Khoa</h2>
    <a href="{{ route('khoa.create') }}" class="btn btn-success mb-3">Thêm Khoa</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã Khoa</th>
                <th>Tên Khoa</th>
                <th>Địa chỉ văn phòng</th>
                <th>Số điện thoại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dsKhoa as $khoa)
            <tr>
                <td>{{ $khoa->MaKhoa }}</td>
                <td>{{ $khoa->TenKhoa }}</td>
                <td>{{ $khoa->DiaChiVanPhong }}</td>
                <td>{{ $khoa->SoDienThoai }}</td>
                <td>
                    <a href="{{ route('khoa.edit', $khoa->MaKhoa) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <form action="{{ route('khoa.destroy', $khoa->MaKhoa) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
