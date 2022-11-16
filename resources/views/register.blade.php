<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link rel="stylesheet" href="css/register.css">

</head>

<body>
    <div class="container">
        <h1>Registreren</h1>
        <P>Maak een account aan</P>
        <form action="register_verwerk.php" method="POST">
            <div class="row">
                <div class="column">
                    <label for="firstname">Firstname</label>
                    <input name="firstname" type="text" id="firstname" placeholder="Your name">
                </div>
                <div class="column">
                    <label for="lastname">Lastname</label>
                    <input name="lastname" type="text" id="lastname" placeholder="Your lastname">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="email">Email</label>
                    <input name="email" type="text" id="email" placeholder="Your email">
                </div>
                <div class="column">
                    <label for="pass">Password</label>
                    <input name="pass" type="password" id="pass" placeholder="Your password">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="birthday">Date of birth</label>
                    <input name="birthday" type="date" id="birthday" placeholder="Your birthday" maxlength="10"
                        min="1960-01-01" max="2010-01-01">
                </div>
                <div class="column">
                    <label for="pnumber">Phonenumber</label>
                    <input name="pnumber" type="text" id="pnumber" placeholder="Your lastname" maxlength="10">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="adres">Address</label>
                    <input name="adres" type="text" id="adres" placeholder="Your address">
                </div>
                <div class="column">
                    <label for="zipcode">Zipcode</label>
                    <input name="zipcode" type="text" id="zipcode" placeholder="Your password">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="city">City</label>
                    <input name="city" type="text" id="city" placeholder="Your email">
                </div>
                <div class="column">
                    <label for="role">Role</label>
                    <select name="role" id="role">
                        <option value="Klant">Klant</option>
                        <option value="Medewerker">Medewerker</option>
                        <option value="Manager">Manager</option>
                    </select>
                </div>
            </div>

            <button name="submit">Submit</button>
            <h3>Heeft al een account? <a href="login.php">Login</a></h3>
        </form>
    </div>
</body>

</html>