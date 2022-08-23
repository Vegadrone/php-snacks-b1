<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Accedi</h1>
    <form action="welcome.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="email" name="email"><br>
        Age:<input type="int" name="age"></form>
        <button type="submit">Send</button>
    <?php
        if($_GET['name'])
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];

        if(strlen($name) > 3
            && (strpos($email, '@') > 0 && strpos($email, '.')>3)
            && (is_numeric($age))
        ){
            echo "Accesso Riuscito";
        } else {
            echo "Accesso Negato";
        }
    ?>

</body>

</html>