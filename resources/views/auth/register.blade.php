<!-- resources/views/auth/register.blade.php -->
@extends('layouts.layout')

@section('title', 'เข้าสู่ระบบ')

@section('content')

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>ลงทะเบียน</h2>
        <form id="registerForm" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">ชื่อ - นามสกุล :</label>
                <input type="text" id="name" name="name" class="form-control" required>
                <span class="text-danger" id="nameError"></span>
            </div>
            <div class="form-group">
                <label for="email">อีเมล :</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <span class="text-danger" id="emailError"></span>
            </div>
            <div class="form-group">
                <label for="password">รหัสผ่าน :</label>
                <input type="password" id="password" name="password" class="form-control" required>
                <span class="text-danger" id="passwordError"></span>
            </div>
            <div class="form-group">
                <label for="confirm_password">ยืนยันรหัสผ่าน :</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                <span class="text-danger" id="confirmPasswordError"></span>
            </div>
            <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
        </form>
        <script>
            document.getElementById('registerForm').addEventListener('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(this);
                fetch('{{ route("auth.postRegistration") }}', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status) {
                        window.location.href = data.redirect;
                    } else {
                        document.getElementById('nameError').textContent = data.errors.name ? data.errors.name[0] : '';
                        document.getElementById('emailError').textContent = data.errors.email ? data.errors.email[0] : '';
                        document.getElementById('passwordError').textContent = data.errors.password ? data.errors.password[0] : '';
                        document.getElementById('confirmPasswordError').textContent = data.errors.confirm_password ? data.errors.confirm_password[0] : '';
                    }
                });
            });
        </script>
    </div>
</body>
</html>

@endsection
