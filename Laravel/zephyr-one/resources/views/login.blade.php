<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/authenticate" method="post">
        @csrf
        <input type="text" name="user_id" id="user_id" placeholder="User Id">
        <input type="text" name="password" id="password" placeholder="Password">
        <button>Login</button>
        <span>Not registered <a href="/register-user">click here</a></span>
    </form>
</body>
</html>