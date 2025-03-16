<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome - QL Thực Tập Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <h1>Chào mừng đến với Hệ thống Quản lý Thực Tập Sinh Viên</h1>
        <p>
            <a href="{{ route('login') }}" class="btn btn-primary">Đăng nhập</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Đăng ký</a>
        </p>
    </div>
</body>
</html>
