<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>แดชบอร์ดผู้ใช้</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h1>ยินดีต้อนรับเข้าสู่หน้าผู้ใช้งานระบบ!</h1>
        <a href="#" onclick="logout()" class="btn btn-danger">ออกจากระบบ</a>
    </div>
    <script>
        function logout() {
            $.post('{{ route('logout') }}', {_token: $('meta[name="csrf-token"]').attr('content')}, function() {
                window.location.href = '/login';
            });
        }
    </script>
</body>
</html>

