<?php

$matches = [
    'totalScore' => [
        'home' => 'Banco di Sardegna Sassari',
        'away' => 'Givova Scafati Basket',
        'score_home' => '79',
        'score_away' => '76'
    ],
    [
        'home' => 'Umana Reyer Venezia',
        'away' => 'UNAHOTELS Reggio Emilia',
        'score_home' => '90',
        'score_away' => '70'
    ],
    [
        'home' => 'EA7 Emporio Armani Milano',
        'away' => 'Estra Pistoia',
        'score_home' => '81',
        'score_away' => '86'
    ],
    [
        'home' => 'Happy Casa Brindisi',
        'away' => 'Virtus Segafredo Bologna',
        'score_home' => '83',
        'score_away' => '75'
    ],
    [
        'home' => 'Generazione Vincente Napoli Basket',
        'away' => 'Vanoli Basket Cremona',
        'score_home' => '80',
        'score_away' => '70'
    ],
    [
        'home' => 'Germani Brescia',
        'away' => 'Openjobmetis Varese',
        'score_home' => '116',
        'score_away' => '73'
    ],
    [
        'home' => 'Carpegna Prosciutto Pesaro',
        'away' => 'NutriBullet Treviso Basket',
        'score_home' => '95',
        'score_away' => '76'
    ],
    [
        'home' => 'Bertram Derthona Tortona',
        'away' => 'Dolomiti Energia Trentino',
        'score_home' => '83',
        'score_away' => '80'
    ],
];
// var_dump($matches)

// $name = $_GET["name"];
// $email = $_GET["email"];
// $age = $_GET["age"];

// var_dump($name, $email, $age);

$text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat architecto possimus, repellat inventore voluptatem officiis id omnis ipsum, sint pariatur sapiente sunt ea minus ad iure est. Sint ad, rem obcaecati quaerat quae suscipit minus placeat. Iste, a culpa consequatur necessitatibus alias provident exercitationem veritatis. Deserunt ea nulla sint nam quia vero corporis minus in. Eligendi mollitia dignissimos inventore adipisci?";
$paragraph = explode(".", $text);

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
    <main class="mt-2">
        <div class="container pt-5 " id="basket">
            <div class="row">
                <h6 class="text-uppercase text-light"> calendario </h6>
                <h6 class="text-uppercase text-light"> 9a giornata </h6>
                <div class="col-6">
                    <ul class=" list-unstyled m-auto">
                        <?php
                        foreach ($matches as $key) {
                        ?>
                            <li class="<?php echo ($key['score_away'] > $key['score_home']) ? 'red' : 'green' ?> ">
                                <p> <?php echo $key['home'] . '-' . $key['away'] . '  |  ' . $key['score_home'] . '-' . $key['score_away'] ?>
                                </p>
                            </li>
                        <?php }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container p-2" id="secondEl">
            <h4 class=" text-uppercase text-center shadow-lg ">login per accedere al tuo profilo privato</h4>
            <form action="second.php" method="GET">
                <div class="mb-3">
                    <label for="name" class="form-label"> Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">               
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                    <label for="age" class="form-label ">Age</label>
                    <input type="text" class="form-control w-25" id="age" name="age">
                </div>
                <button type="submit" class="btn btn-success">Invia</button>
            </form>
        </div>

        <div class="container p-2" id="paragrafo">
            <div class="opacity-50">
                <h6 class=" text-uppercase ">testo originale</h6>
               <p><?php echo $text ?></p> 
            </div>
            <div>
                <h6 class="text-uppercase"> testo modificato</h6></h6>
            <?php
            foreach ($paragraph as $paragraphEl) { ?>
                <p>
                    <?php
                    echo "$paragraphEl ."
                    ?>
                </p>
            <?php } ?>

            </div>
            
        </div>
    </main>





    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>