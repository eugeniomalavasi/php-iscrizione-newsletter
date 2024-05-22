<?php
// $user_email = "";
// if(isset($_POST['email']) && str_contains(($_POST['email']), "@") && str_contains(($_POST['email']), ".")) {
//     $user_email = $_POST['email'];
// }
// var_dump($user_email);

// callback function
include __DIR__ . "/partials/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php newsletter</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="post" class="mt-5">
            <h5>inserisci la tua mail</h5>
            <input type="text" aria-label="inserisci la mail" name="email">
            <button type="submit" class="btn btn-primary">Invia</button>
            <h6 class="<?php class_change() ?> w-25 mt-3"><?php mail_check(); ?></h6>
        </form>
    </div>
</body>

</html>