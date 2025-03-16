<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 240px; height: 100vh; position: fixed;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">QL Thực Tập</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        {{-- Hiển thị menu theo vai trò --}}
        @if(Auth::check() && Auth::user()->role == 'admin')
            <li class="nav-item">
                <a href="{{ route('khoa.index') }}" class="nav-link link-dark">Quản lý Khoa</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('namhoc.index') }}" class="nav-link link-dark">Quản lý Năm Học</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('hocky.index') }}" class="nav-link link-dark">Quản lý Học Kỳ</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('monhoc.index') }}" class="nav-link link-dark">Quản lý Môn Học</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.vitrithethap.index') }}" class="nav-link link-dark">Quản lý Vị trí Thực tập</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.dangkythuctap.index') }}" class="nav-link link-dark">Đơn đăng ký Thực tập</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('thongke.index') }}" class="nav-link link-dark">Thống kê & Báo cáo</a>
            </li>
        @endif

        @if(Auth::check() && Auth::user()->role == 'giangvien')
            <li class="nav-item">
                <a href="{{ route('giangvien.dashboard') }}" class="nav-link link-dark">Dashboard Giảng Viên</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('giangvien.thuctap.evaluateForm') }}" class="nav-link link-dark">Đánh giá Báo cáo</a>
            </li>
        @endif

        @if(Auth::check() && Auth::user()->role == 'sinhvien')
            <li class="nav-item">
                <a href="{{ route('sinhvien.dashboard') }}" class="nav-link link-dark">Dashboard Sinh Viên</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('sinhvien.dangkythuctap.register') }}" class="nav-link link-dark">Đăng ký Thực tập</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('sinhvien.thuctap.upload') }}" class="nav-link link-dark">Nộp Báo cáo Thực tập</a>
            </li>
        @endif

        @if(Auth::check() && Auth::user()->role == 'doanhnghiep')
            <li class="nav-item">
                <a href="{{ route('doanhnghiep.dashboard') }}" class="nav-link link-dark">Dashboard Doanh Nghiệp</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('doanhnghiep.vitrithethap.index') }}" class="nav-link link-dark">Quản lý Vị trí Thực tập</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('doanhnghiep.thuctap.evaluateForm') }}" class="nav-link link-dark">Đánh giá Sinh Viên</a>
            </li>
        @endif
    </ul>
    <hr>
    <div>
        <a href="{{ route('logout') }}" class="btn btn-outline-danger w-100"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Đăng xuất
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>

<style>
    body {
        margin-left: 260px;
    }
</style>
