@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Đánh giá và Chấm điểm Báo cáo Thực tập</h2>
    @if($dsBaoCao->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Báo cáo</th>
                    <th>Mã Sinh Viên</th>
                    <th>Ngày nộp</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dsBaoCao as $bc)
                <tr>
                    <td>{{ $bc->MaBaoCao }}</td>
                    <td>{{ $bc->SinhVienThucTap }}</td>
                    <td>{{ $bc->created_at }}</td>
                    <td>
                        <a href="{{ route('giangvien.thuctap.evaluateForm', $bc->MaBaoCao) }}" class="btn btn-primary btn-sm">Đánh giá</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Chưa có báo cáo nào được nộp.</p>
    @endif
</div>
@endsection
