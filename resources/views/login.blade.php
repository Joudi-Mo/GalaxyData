<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- fontawesome.com -->
    <script src="https://kit.fontawesome.com/a333f4247d.js" crossorigin="anonymous"></script>
</head>


<body id="body">
    <div class="wrapper">
        <h2>Sign In</h2>
        <form action="/loginauth" method="POST">
           
            <div class="input-box">
                <input name="email" type="email" value="{{old('email')}}" placeholder="Enter your email">
            </div>
            <div class="input-box">
                <input name="password" type="password" value="{{old('password')}}" placeholder="Enter your password">
            </div>

            <div class="input-box button">
                <input type="submit" value="Log in" name="submit">
            </div>
            <div class="text">
                <h3>New? Sign up<a href="/register"> here! </a></h3>
            </div>
        </form>
    </div>
</body>

</html>