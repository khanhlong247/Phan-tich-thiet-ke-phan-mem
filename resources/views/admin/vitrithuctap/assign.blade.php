@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gán Giảng Viên Hướng dẫn cho Vị trí Thực tập</h2>
    <div class="card mb-3">
        <div class="card-body">
            <p><strong>Mã vị trí:</strong> {{ $vitri->MaViTriThucTap }}</p>
            <p><strong>Tên vị trí:</strong> {{ $vitri->TenViTriThucTap }}</p>
            <p><strong>Địa điểm:</strong> {{ $vitri->DiaDiemThucTap }}</p>
        </div>
    </div>
    <form action="{{ route('admin.vitrithethap.assignStore', $vitri->MaViTriThucTap) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="GiangVienHuongDan" class="form-label">Chọn Giảng Viên Hướng dẫn</label>
            <select name="GiangVienHuongDan" id="GiangVienHuongDan" class="form-control" required>
                <option value="">-- Chọn Giảng Viên --</option>
                @foreach($dsGiangVien as $gv)
                    <option value="{{ $gv->MaGiangVien }}">{{ $gv->TenGiangVien }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Gán Giảng Viên</button>
        <a href="{{ route('admin.vitrithethap.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
