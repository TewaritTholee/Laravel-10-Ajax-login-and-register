<!-- resources/views/auth/login.blade.php -->
@extends('layouts.layout')

@section('title', 'เข้าสู่ระบบ')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">เข้าสู่ระบบ</div>
            <div class="card-body">
                <form id="loginForm" method="POST">
                    @csrf
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
                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        fetch('{{ route("auth.postLogin") }}', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                window.location.href = data.redirect;
            } else {
                document.getElementById('emailError').textContent = data.errors.email ? data.errors.email[0] : '';
                document.getElementById('passwordError').textContent = data.errors.password ? data.errors.password[0] : '';
            }
        });
    });
</script>
@endsection
