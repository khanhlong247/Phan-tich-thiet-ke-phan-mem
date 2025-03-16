@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Môn Học</h2>
    <a href="{{ route('monhoc.create') }}" class="btn btn-success mb-3">Thêm Môn Học</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã Môn Học</th>
                <th>Tên Môn Học</th>
                <th>Số Tin Chỉ</th>
                <th>Học Kỳ Hiện Tại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dsMonHoc as $mh)
            <tr>
                <td>{{ $mh->MaMonHoc }}</td>
                <td>{{ $mh->TenMonHoc }}</td>
                <td>{{ $mh->SoTinChi }}</td>
                <td>{{ $mh->HocKyHienTai }}</td>
                <td>
                    <a href="{{ route('monhoc.edit', $mh->MaMonHoc) }}" class="btn btn-primary btn-sm">Sửa</a>
                    <a href="{{ route('monhoc.show', $mh->MaMonHoc) }}" class="btn btn-info btn-sm">Chi tiết</a>
                    <form action="{{ route('monhoc.destroy', $mh->MaMonHoc) }}" method="POST" style="display:inline;">
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
