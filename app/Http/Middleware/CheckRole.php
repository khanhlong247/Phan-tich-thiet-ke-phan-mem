<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Xử lý yêu cầu truy cập.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed ...$roles  Danh sách các role được phép truy cập (ví dụ: admin, giangvien, sinhvien)
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (Auth::check()) {
            $userRole = Auth::user()->role; // Giả sử cột role trong bảng users đã được thêm vào
            // Nếu role của người dùng nằm trong danh sách các role được phép, cho phép truy cập
            if (in_array($userRole, $roles)) {
                return $next($request);
            }
        }

        // Nếu không đủ quyền, trả về lỗi 403 (Forbidden)
        abort(403, 'Unauthorized action.');
    }
}
