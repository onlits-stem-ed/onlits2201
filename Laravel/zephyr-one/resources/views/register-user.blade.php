<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register User</h1>
    <form action="/registration" method="post">
        @csrf
        <input type="text" name="user_id" id="user_id" placeholder="User Id">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
        <button>Register</button>
        <span>Already registered <a href="/">click here</a> to login</span>
    </form>
</body>
</html>