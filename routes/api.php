<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KhoaApiController;
use App\Http\Controllers\Api\NamHocApiController;
use App\Http\Controllers\Api\HocKyApiController;
use App\Http\Controllers\Api\SinhVienApiController;
use App\Http\Controllers\Api\GiangVienApiController;
use App\Http\Controllers\Api\DoanhNghiepApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Các route API trả về JSON cho mobile hoặc SPA. Chúng được bảo vệ bởi middleware
| 'auth:sanctum' nếu cần.
|
*/

Route::middleware('auth:sanctum')->group(function () {
    // API cho đối tượng Khoa
    Route::get('/khoa', [KhoaApiController::class, 'index']);
    Route::post('/khoa', [KhoaApiController::class, 'store']);
    Route::get('/khoa/{id}', [KhoaApiController::class, 'show']);
    Route::put('/khoa/{id}', [KhoaApiController::class, 'update']);
    Route::delete('/khoa/{id}', [KhoaApiController::class, 'destroy']);

    // API cho đối tượng Năm Học
    Route::get('/namhoc', [NamHocApiController::class, 'index']);
    Route::post('/namhoc', [NamHocApiController::class, 'store']);
    Route::get('/namhoc/{id}', [NamHocApiController::class, 'show']);
    Route::put('/namhoc/{id}', [NamHocApiController::class, 'update']);
    Route::delete('/namhoc/{id}', [NamHocApiController::class, 'destroy']);

    // API cho đối tượng Học Kỳ
    Route::get('/hocky', [HocKyApiController::class, 'index']);
    Route::post('/hocky', [HocKyApiController::class, 'store']);
    Route::get('/hocky/{id}', [HocKyApiController::class, 'show']);
    Route::put('/hocky/{id}', [HocKyApiController::class, 'update']);
    Route::delete('/hocky/{id}', [HocKyApiController::class, 'destroy']);

    // API cho đối tượng Sinh Viên
    Route::get('/sinhvien', [SinhVienApiController::class, 'index']);
    Route::post('/sinhvien', [SinhVienApiController::class, 'store']);
    Route::get('/sinhvien/{id}', [SinhVienApiController::class, 'show']);
    Route::put('/sinhvien/{id}', [SinhVienApiController::class, 'update']);
    Route::delete('/sinhvien/{id}', [SinhVienApiController::class, 'destroy']);

    // API cho đối tượng Giảng Viên
    Route::get('/giangvien', [GiangVienApiController::class, 'index']);
    Route::post('/giangvien', [GiangVienApiController::class, 'store']);
    Route::get('/giangvien/{id}', [GiangVienApiController::class, 'show']);
    Route::put('/giangvien/{id}', [GiangVienApiController::class, 'update']);
    Route::delete('/giangvien/{id}', [GiangVienApiController::class, 'destroy']);

    // API cho đối tượng Doanh Nghiệp
    Route::get('/doanhnghiep', [DoanhNghiepApiController::class, 'index']);
    Route::post('/doanhnghiep', [DoanhNghiepApiController::class, 'store']);
    Route::get('/doanhnghiep/{id}', [DoanhNghiepApiController::class, 'show']);
    Route::put('/doanhnghiep/{id}', [DoanhNghiepApiController::class, 'update']);
    Route::delete('/doanhnghiep/{id}', [DoanhNghiepApiController::class, 'destroy']);
});
