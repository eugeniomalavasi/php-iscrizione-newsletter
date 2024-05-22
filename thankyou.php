<?php 
include_once __DIR__ . "/partials/functions.php";
if (!isset($_SESSION)){
    session_start();  
    echo $_SESSION["auth"];
} 
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>thank you</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Grazie, ti giuriamo che ora non ti manderemo mail di spam</h1>
        <form action="index.php" method="get" class="mt-3">
            <button type="submit" class="btn btn-primary">Home</button>
        </form>
    </div>
</body>

</html>