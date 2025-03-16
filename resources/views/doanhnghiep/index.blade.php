@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Doanh Nghiệp</h2>
    <a href="{{ route('doanhnghiep.create') }}" class="btn btn-success mb-3">Thêm Doanh Nghiệp</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã Doanh Nghiệp</th>
                <th>Tên Doanh Nghiệp</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dsDoanhNghiep as $dn)
            <tr>
                <td>{{ $dn->MaDoanhNghiep }}</td>
                <td>{{ $dn->TenDoanhNghiep }}</td>
                <td>{{ $dn->Email }}</td>
                <td>{{ $dn->DiaChi }}</td>
                <td>
                    <a href="{{ route('doanhnghiep.edit', $dn->MaDoanhNghiep) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <form action="{{ route('doanhnghiep.destroy', $dn->MaDoanhNghiep) }}" method="POST" style="display:inline;">
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
