<?php

$matches = [
    'totalScore' => [
        'home' => 'Virtus Bologna',
        'away' => 'Armani Milano',
        'score_home' => '32',
        'score_away' => '41'
    ],
    [
        'home' => 'Cantù',
        'away' => 'Lottomatica',
        'score_home' => '51',
        'score_away' => '73'
    ],
    [
        'home' => 'Real Madrid',
        'away' => 'Oplympiacos',
        'score_home' => '78',
        'score_away' => '81'
    ],
];
// var_dump($matches)

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

<body>
    <header></header>
    <main>
        <div class="container">
            <ul>
            <?php
            foreach ($matches as $key) {
               ?>
                   <li> <?php echo $key['home'] . '-' . $key['away'] . '|' . $key['score_home'] . '-' . $key['score_away'] ?></li>
            <?php }
             ?>
            </ul>
        </div>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>