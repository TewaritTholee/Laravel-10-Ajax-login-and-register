<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, Admin!</h1>
    <a href="#" onclick="logout()">Logout</a>
    <script>
        function logout() {
            $.post('/logout', {_token: $('meta[name="csrf-token"]').attr('content')}, function() {
                window.location.href = '/';
            });
        }
    </script>
</body>
</html>
