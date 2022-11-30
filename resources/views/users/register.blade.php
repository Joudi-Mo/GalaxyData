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
                <input name="name" value="{{old('name')}}" type="text" placeholder="Enter your username">

                @error('name') 
                    <p style="color: red;padding-bottom:5px">{{$message}}</p>
                @enderror
            </div>
            <div class="input-box">
                <label for="username">Email</label>
                <input name="email" type="email" value="{{old('email')}}" placeholder="Enter your email">

                @error('email') 
                 <p style="color: red;padding-bottom:5px">{{$message}}</p>
                @enderror
            </div>
            <div class="input-box">
                <label for="username">Password</label>
                <input name="password" type="password" value="{{old('password')}}" placeholder="Enter your password">

                @error('password') 
                 <p style="color: red;padding-bottom:5px">{{$message}}</p>
                @enderror
            </div>

            <div class="input-box">
                <label for="username">Confirm Password</label>
                <input name="password_confirmation" type="password" value="{{old('password_confirmation')}}" placeholder="Enter your password">

                @error('password_confirmation') 
                  <p style="color: red;padding-bottom:5px">{{$message}}</p>
                @enderror
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