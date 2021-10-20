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

        <form action="/login" method="post">
            @csrf
            <div>
                    <input type="email" placeholder="Email..">
            </div>
            <div>
                    <input type="password" placeholder="Password">
            </div>
            <div>
                <input type="submit" value="Save">
            </div>
        </form>
    <div>
        Copyright {{$data}}
    </div>
    <a href="{{ route('user.signup') }}"></a>

@if($status)
    <button>Create</button>
@endif
</body>
</html>
