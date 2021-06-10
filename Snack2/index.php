<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
    $access = 'Accesso riuscito';

    if(strlen($name) < 4) {
        $access = 'Accesso negato';
    }

    if(strpos($email, '@') === false) {
        $access = 'Accesso negato';
    }elseif(strpos($email, '.') === false) {
        $access = 'Accesso negato';
    }

    if(is_numeric($age) === false) {
        $access = 'Accesso negato';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access</title>
</head>
<body>
    <h1><?php echo $access; ?></h1>
</body>
</html>