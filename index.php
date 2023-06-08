<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <style>
        body {
            background: #000;
            color: #fff;
        }
        span {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <?php

        $hotels = [

            [
                'name' => 'Hotel Belvedere',
                'description' => 'Hotel Belvedere Descrizione',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 10.4
            ],
            [
                'name' => 'Hotel Futuro',
                'description' => 'Hotel Futuro Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 2
            ],
            [
                'name' => 'Hotel Rivamare',
                'description' => 'Hotel Rivamare Descrizione',
                'parking' => false,
                'vote' => 1,
                'distance_to_center' => 1
            ],
            [
                'name' => 'Hotel Bellavista',
                'description' => 'Hotel Bellavista Descrizione',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 5.5
            ],
            [
                'name' => 'Hotel Milano',
                'description' => 'Hotel Milano Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 50
            ],

        ];

    ?>

    <div>
        <?php 
            foreach($hotels as $hoteL) { ?>
                <p>Nome: <span><?php echo $hoteL["name"]; ?></span></p>
                <p>Descizione: <span><?php echo $hoteL["description"]; ?></span></p>
                <p>Parcheggio: <span><?php echo $hoteL["parking"]; ?></span></p>
                <p>Voto: <span><?php echo $hoteL["vote"]; ?></span></p>
                <p>Distanza dal centro: <span><?php echo $hoteL["distance_to_center"]; ?></span></p>
                <hr>
            <?php } ?>
    </div>

</body>
</html>