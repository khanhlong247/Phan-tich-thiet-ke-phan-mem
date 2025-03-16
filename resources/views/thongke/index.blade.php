@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thống kê và Báo cáo Tổng hợp</h2>
    <form action="{{ route('thongke.generate') }}" method="GET">
        <div class="mb-3">
            <label for="criteria" class="form-label">Chọn tiêu chí thống kê:</label>
            <select name="criteria" id="criteria" class="form-control" required>
                <option value="">-- Chọn tiêu chí --</option>
                <option value="namhoc">Theo Năm Học</option>
                <option value="hocky">Theo Học Kỳ</option>
                <option value="monhoc">Theo Môn Học</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Xuất Báo cáo</button>
    </form>

    @if(isset($report))
        <div class="mt-4">
            <h3>Báo cáo thống kê</h3>
            {{-- Báo cáo có thể được hiển thị dưới dạng bảng hoặc biểu đồ --}}
            {!! $report !!}
        </div>
    @endif
</div>
@endsection
