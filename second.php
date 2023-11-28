<?php

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body id="body-sec">
    <div class="text-light d-flex justify-content-center pt-5">
       <h2> <?php if ((str_contains($email, "@")) && (str_contains($email, "."))  && (strlen($name > 3)) && (is_numeric($age))) {
            echo "Accesso riuscito, <br> Ciao $name ";
        } else {
            echo "Accesso negato, <br> controlla i dati inseriti e riprova";
        }

        ?>
        </h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>