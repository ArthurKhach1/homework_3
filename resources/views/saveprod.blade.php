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



<form action="/saveprod" method="post">
    @csrf
    <div>
        <input type="name" name="name" placeholder="Name..">
    </div><div>
        <input type="text" name="price" placeholder="Price..">
    </div>

    <div>
        <input type="submit" value="Save">
    </div>
</form>
<div>

</div>
</body>
</html>


