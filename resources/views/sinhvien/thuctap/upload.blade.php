@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nộp Báo cáo Thực tập</h2>
    <form action="{{ route('sinhvien.thuctap.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="MaThucTap" class="form-label">Mã Thực tập</label>
            <input type="text" name="MaThucTap" class="form-control" id="MaThucTap" required>
        </div>
        <div class="mb-3">
            <label for="BaoCao" class="form-label">Tệp Báo cáo (PDF, DOC, DOCX)</label>
            <input type="file" name="BaoCao" class="form-control" id="BaoCao" accept=".pdf,.doc,.docx" required>
        </div>
        <button type="submit" class="btn btn-primary">Nộp Báo cáo</button>
    </form>
</div>
@endsection
