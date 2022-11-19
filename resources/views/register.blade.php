<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="css/register.css">
    <!-- fontawesome.com -->
    <script src="https://kit.fontawesome.com/a333f4247d.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <div class="wrapper">
        <h2>Sign Up</h2>
        <form action="/users" method="POST">
           @csrf
            <div class="input-box">
                <label for="username">Username</label>
                <input name="username" type="text" placeholder="Enter your username">
            </div>
            <div class="input-box">
                <label for="username">Email</label>
                <input name="email" type="email" placeholder="Enter your email">
            </div>
            <div class="input-box">
                <label for="username">Password</label>
                <input name="password" type="password" placeholder="Enter your password">
            </div>

            <div class="input-box button">
                <input type="submit" value="Sign up" name="submit">
            </div>
            <div class="text">
                <h3>Already have an account? Sign in <a href="/login">here! </a></h3>
            </div>
        </form>
    </div>
</body>

</html>