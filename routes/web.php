<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhoaController;
use App\Http\Controllers\NamHocController;
use App\Http\Controllers\HocKyController;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\GiangVienController;
use App\Http\Controllers\DoanhNghiepController;
use App\Http\Controllers\Admin\ViTriThucTapController;
use App\Http\Controllers\Admin\DangKyThucTapController;
use App\Http\Controllers\SinhVien\ThucTapController as SinhVienThucTapController;
use App\Http\Controllers\GiangVien\ThucTapController as GiangVienThucTapController;
use App\Http\Controllers\DoanhNghiep\ThucTapController as DoanhNghiepThucTapController;
use App\Http\Controllers\HocVu\MonHocController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Đây là nơi đăng ký các route giao diện web của ứng dụng.
| Các route này được nạp bởi RouteServiceProvider và thuộc nhóm middleware "web".
|
*/

// Trang chủ
Route::get('/', function () {
    return view('welcome');
});

// Các route xác thực do Laravel Breeze tạo ra
require __DIR__.'/auth.php';

// Các route yêu cầu đăng nhập
Route::middleware(['auth'])->group(function () {

    // Nhóm cho Admin (Khoa)
    Route::middleware(['checkRole:admin'])->group(function () {
        Route::resource('khoa', KhoaController::class);
        Route::resource('namhoc', NamHocController::class);
        Route::resource('hocky', HocKyController::class);
        Route::resource('monhoc', MonHocController::class);
        
        // Các chức năng quản lý vị trí thực tập và đơn đăng ký (Admin)
        Route::prefix('admin')->name('admin.')->group(function () {
            // Quản lý vị trí thực tập: duyệt, gán giảng viên hướng dẫn
            Route::get('vitrithethap', [ViTriThucTapController::class, 'index'])->name('vitrithethap.index');
            Route::get('vitrithethap/{id}', [ViTriThucTapController::class, 'show'])->name('vitrithethap.show');
            Route::get('vitrithethap/{id}/assign', [ViTriThucTapController::class, 'assign'])->name('vitrithethap.assign');
            Route::post('vitrithethap/{id}/assign', [ViTriThucTapController::class, 'assignStore'])->name('vitrithethap.assignStore');

            // Quản lý đơn đăng ký thực tập
            Route::get('dangkythuctap', [DangKyThucTapController::class, 'index'])->name('dangkythuctap.index');
            Route::get('dangkythuctap/{id}', [DangKyThucTapController::class, 'show'])->name('dangkythuctap.show');
            Route::get('dangkythuctap/{id}/approve', [DangKyThucTapController::class, 'approve'])->name('dangkythuctap.approve');
            Route::get('dangkythuctap/{id}/reject', [DangKyThucTapController::class, 'reject'])->name('dangkythuctap.reject');
        });
    });

    // Nhóm cho Giảng viên
    Route::middleware(['checkRole:giangvien'])->group(function () {
        Route::get('giangvien/dashboard', [GiangVienController::class, 'dashboard'])->name('giangvien.dashboard');
        Route::get('giangvien/thuctap/evaluate/{maBaoCao}', [GiangVienThucTapController::class, 'evaluateForm'])->name('giangvien.thuctap.evaluateForm');
        Route::post('giangvien/thuctap/evaluate/{maBaoCao}', [GiangVienThucTapController::class, 'evaluate'])->name('giangvien.thuctap.evaluate');
    });

    // Nhóm cho Sinh viên
    Route::middleware(['checkRole:sinhvien'])->group(function () {
        Route::get('sinhvien/dashboard', [SinhVienController::class, 'dashboard'])->name('sinhvien.dashboard');
        Route::get('sinhvien/dangkythuctap', [SinhVienThucTapController::class, 'showRegisterForm'])->name('sinhvien.dangkythuctap.register');
        Route::post('sinhvien/dangkythuctap', [SinhVienThucTapController::class, 'register'])->name('sinhvien.dangkythuctap.store');
        Route::get('sinhvien/dangkythuctap/status', [SinhVienThucTapController::class, 'status'])->name('sinhvien.dangkythuctap.status');
        Route::get('sinhvien/thuctap/upload', [SinhVienThucTapController::class, 'uploadForm'])->name('sinhvien.thuctap.uploadForm');
        Route::post('sinhvien/thuctap/upload', [SinhVienThucTapController::class, 'upload'])->name('sinhvien.thuctap.upload');
    });

    // Nhóm cho Doanh nghiệp
    Route::middleware(['checkRole:doanhnghiep'])->group(function () {
        Route::get('doanhnghiep/dashboard', [DoanhNghiepController::class, 'dashboard'])->name('doanhnghiep.dashboard');

        // Quản lý vị trí thực tập của doanh nghiệp
        Route::prefix('doanhnghiep/vitrithethap')->name('doanhnghiep.vitrithethap.')->group(function () {
            Route::get('/', [\App\Http\Controllers\DoanhNghiep\ViTriThucTapController::class, 'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\DoanhNghiep\ViTriThucTapController::class, 'create'])->name('create');
            Route::post('/', [\App\Http\Controllers\DoanhNghiep\ViTriThucTapController::class, 'store'])->name('store');
            Route::get('/{id}', [\App\Http\Controllers\DoanhNghiep\ViTriThucTapController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [\App\Http\Controllers\DoanhNghiep\ViTriThucTapController::class, 'edit'])->name('edit');
            Route::put('/{id}', [\App\Http\Controllers\DoanhNghiep\ViTriThucTapController::class, 'update'])->name('update');
            Route::delete('/{id}', [\App\Http\Controllers\DoanhNghiep\ViTriThucTapController::class, 'destroy'])->name('destroy');
        });

        // Đánh giá sinh viên từ doanh nghiệp
        Route::prefix('doanhnghiep/thuctap')->name('doanhnghiep.thuctap.')->group(function () {
            Route::get('/evaluate/{maSinhVien}', [\App\Http\Controllers\DoanhNghiep\ThucTapController::class, 'evaluateForm'])->name('evaluateForm');
            Route::post('/evaluate/{maSinhVien}', [\App\Http\Controllers\DoanhNghiep\ThucTapController::class, 'evaluate'])->name('evaluate');
        });
    });
});
