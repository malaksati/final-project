<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href='{{ asset("assets/css/all.min.css") }}'>
    <link rel="stylesheet" href='{{ asset("assets/css/bootstrap.css") }}'>
    <link rel="stylesheet" href='{{ asset("assets/css/style.css") }}'>
</head>
<body>
    <section class="container my-5">
        <h1 class="heading-section">Register page</h1>
        <form method="POST" action="{{ url('register') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">User Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">User Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <input type="submit" class="btn btn-danger" value="Register">
        </form>
    </section>
</body>
</html>