<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<style>

</style>
<body>
<h1>Login</h1>

<form action="/sign-up" method="post">
    @csrf
    <div>
        <input type="name" name="name" placeholder="Name..">
    </div><div>
        <input type="email" name="email" placeholder="Email..">
    </div>
    <div>
        <input type="password" name="pass" placeholder="Password">
    </div>
    <div>
        <input type="submit" value="Save">
    </div>
</form>
<div>

</div>
</body>
</html>

