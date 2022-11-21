


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/table.css">
    <title>Document</title>
</head>

<body>
    <div class="table-container">
        <h1 class="heading">Klanten overzicht</h1>
        <a href="index.php" class="link-primary">home</a>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>email</th>
                    <th>password</th>
                    <th>birthdate</th>
                    <th>phonenumber</th>
                    <th>adress</th>
                    <th>zipcode</th>
                    <th>city</th>
                    <th>role</th>
                    <th>update</th>
                    <th>verwijder</th>
                </tr>
            </thead>
            <tbody>
                @unless(count($listings) == 0)
                @foreach($listings as $listing)
                <tr>
                    <td data-label="id"><?php echo $mel["id"] ?></td>
                    <td data-label="firstname"><?php echo $mel["firstname"] ?></td>
                    <td data-label="lastname"><?php echo $mel["lastname"] ?></td>
                    <td data-label="email"><?php echo $mel["email"] ?></td>
                    <td data-label="password"><?php echo $mel["password"] ?></td>
                    <td data-label="date_of_birth"><?php echo $mel["date_of_birth"] ?></td>
                    <td data-label="phonenumber"><?php echo $mel["phonenumber"] ?></td>
                    <td data-label="adress"><?php echo $mel["adress"] ?></td>
                    <td data-label="zipcode"><?php echo $mel["zipcode"] ?></td>
                    <td data-label="city"><?php echo $mel["city"] ?></td>
                    <td data-label="role"><?php echo $mel["role"] ?></td>
                    <td data-label="update"><a href="klanten-update.php?id=<?php echo $mel["id"] ?>"
                            class="btn">update</a></td>

                    <td data-label="verwijder"><a href="php/klanten-delete-verwerk.php?id=<?php echo $mel["id"] ?>"
                            class="btn">verwijder</a>
                    </td>
                </tr>
                @endforeach
                @else
                <p>no words found be the first one to make it</p>
                @endunless
            </tbody>
        </table>
    </div>
</body>

</html>