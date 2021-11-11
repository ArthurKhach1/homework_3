<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="user" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="name" name="name" placeholder="Name..">
    </div><div>
        <input type="email" name="email" placeholder="Email..">
    </div>
    <div>
        <input type="password" name="password" placeholder="Password">
    </div>

    <div>
        <input type="submit" value="Sign up">
    </div>
</form>
</body>
</html>
