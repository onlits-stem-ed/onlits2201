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
        <label for="user_id">User Id</label>
        <input type="text" name="user_id" id="user_id">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button>Submit</button>
    </form>
</body>

</html>