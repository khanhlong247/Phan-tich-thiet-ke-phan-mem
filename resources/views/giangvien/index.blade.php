@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Giảng Viên</h2>
    <a href="{{ route('giangvien.create') }}" class="btn btn-success mb-3">Thêm Giảng Viên</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã Giảng Viên</th>
                <th>Tên Giảng Viên</th>
                <th>Email</th>
                <th>Chuyên ngành</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dsGiangVien as $gv)
            <tr>
                <td>{{ $gv->MaGiangVien }}</td>
                <td>{{ $gv->TenGiangVien }}</td>
                <td>{{ $gv->Email }}</td>
                <td>{{ $gv->ChuyenNganh }}</td>
                <td>
                    <a href="{{ route('giangvien.edit', $gv->MaGiangVien) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <form action="{{ route('giangvien.destroy', $gv->MaGiangVien) }}" method="POST" style="display:inline;">
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
