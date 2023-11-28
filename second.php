
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
    <title>Document</title>
</head>
<body>
<div>
    <?php if ( (str_contains( $email , "@") ) &&(str_contains( $email , ".") )  && (strlen ($name > 3)) && (is_numeric($age)) ) {
            echo "Accesso riuscito";
        } else{
            echo "Accesso negato";
        }
                
                ?>
            </div>
</body>
</html>