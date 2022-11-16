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
<?php
// Initialize the session
session_start();
$_SESSION = [];
SESSION_destroy();
session_start();
$_SESSION["is_logged_in"] = false;
$_SESSION["id"] = null;
$_SESSION["username"] = null;
$_SESSION["role"] = null;
$username = $password = $login_err = "";
// Include database file


if (isset($_POST['submit']) && !empty(trim($_POST["email"])) && !empty(trim($_POST["pass"]))) {
    $email = trim($_POST["email"]);
    $password = trim($_POST["pass"]);

    $sql = "SELECT id, firstname, password, email, role FROM `users` where email = '$email'";
    if ($result = mysqli_query($conn, $sql)) {
        $data = mysqli_fetch_assoc($result);
    }


    if (!is_null($data) || !empty($data)) {
        if ($email == $data['email'] && $password == $data['password']) {
            // Store data in session variables
            $_SESSION["is_logged_in"] = true;
            $_SESSION["id"] = $data['id'];
            $_SESSION["username"] = $data['firstname'];
            $_SESSION["role"] = $data['role'];

            if ($data['role'] == 'klant') {
                header("location: klant/bestellen.php");
            } else {
                header("location: medewerker/producten_overzicht.php");
            }
        } else {
            $login_err = "Email of wachtwoord niet correct!";
        }
    }
    else{
        $login_err = "Deze email bestaat niet";
    }

    mysqli_close($conn); // Sluit de database verbinding
} elseif (isset($_POST['submit'])) {
    $login_err = "Een van de velden of beide is leeg";
}
?>

<body id="body">
    <div class="wrapper">
        <h2>Inloggen</h2>
        <form action="login.php" method="POST">
            <p class="err-text">
                <?php
                if (!empty($login_err)) {
                    echo $login_err;
                }
                ?>
            </p>
            <div class="input-box">
                <input name="email" type="email" placeholder="Enter your email">
            </div>
            <div class="input-box">
                <input name="pass" type="password" placeholder="Enter your password">
            </div>

            <div class="input-box button">
                <input type="submit" value="Log in" name="submit">
            </div>
            <div class="text">
                <h3>Nieuw?<a href="register.php"> Registreer je je hier!</a></h3>
            </div>
        </form>
    </div>
</body>

</html>