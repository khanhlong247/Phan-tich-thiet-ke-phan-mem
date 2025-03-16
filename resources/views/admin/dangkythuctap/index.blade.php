@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Đơn đăng ký Thực tập (Admin)</h2>
    @if($dsDonDK->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Đơn</th>
                    <th>Mã Sinh Viên</th>
                    <th>Vị trí đăng ký</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dsDonDK as $don)
                <tr>
                    <td>{{ $don->MaDonDKTT }}</td>
                    <td>{{ $don->SinhVienThucTap }}</td>
                    <td>{{ $don->ViTriThucTap }}</td>
                    <td>{{ $don->TrangThai }}</td>
                    <td>
                        <a href="{{ route('admin.dangkythuctap.show', $don->MaDonDKTT) }}" class="btn btn-info btn-sm">Chi tiết</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Chưa có đơn đăng ký nào.</p>
    @endif
</div>
@endsection
