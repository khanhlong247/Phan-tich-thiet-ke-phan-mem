@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Sinh Viên</h2>
    <a href="{{ route('sinhvien.create') }}" class="btn btn-success mb-3">Thêm Sinh Viên</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã Sinh Viên</th>
                <th>Tên Sinh Viên</th>
                <th>Email</th>
                <th>Nghành học</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dsSinhVien as $sv)
            <tr>
                <td>{{ $sv->MaSinhVien }}</td>
                <td>{{ $sv->TenSinhVien }}</td>
                <td>{{ $sv->Email }}</td>
                <td>{{ $sv->NganhHoc }}</td>
                <td>
                    <a href="{{ route('sinhvien.edit', $sv->MaSinhVien) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <form action="{{ route('sinhvien.destroy', $sv->MaSinhVien) }}" method="POST" style="display:inline;">
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
