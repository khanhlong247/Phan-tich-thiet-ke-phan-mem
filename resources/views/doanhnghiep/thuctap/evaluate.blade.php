@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Đánh giá Sinh Viên Thực tập</h2>
    @if($dsDanhGia->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Sinh Viên</th>
                    <th>Tên Sinh Viên</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dsDanhGia as $dg)
                <tr>
                    <td>{{ $dg->MaSinhVien }}</td>
                    <td>{{ $dg->TenSinhVien }}</td>
                    <td>
                        <a href="{{ route('doanhnghiep.thuctap.evaluateForm', $dg->MaSinhVien) }}" class="btn btn-primary btn-sm">Đánh giá</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Chưa có sinh viên nào được đánh giá.</p>
    @endif
</div>
@endsection
