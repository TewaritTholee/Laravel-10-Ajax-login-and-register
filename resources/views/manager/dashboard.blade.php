<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manager Dashboard</title>
</head>
<body>
    <h1>Welcome, Manager!</h1>
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
