<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <h1>Forget Password?<h1>
        <div>
            <p>Are you forget your password it's ok here your reset link</p>
        </div>
        <div style="text-align: center">
            <a type="button" href="{{ route('admin.reset_link', ['email' => $email, 'token' => $token]) }}">
                <img src="https://img.icons8.com/3d-fluency/94/key.png" alt="" width="90" height="90" />
                <b>Click Here</b>
            </a>
        <div>
    </body>

</html>
