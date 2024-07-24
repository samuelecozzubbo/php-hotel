<?php
/* Array di hotels */
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

    $hotel_keys= array_keys($hotels[0]);
/*     var_dump($hotel_keys); */
/* CHECK PARCHEGGIO */
$check = isset($_GET['check']) ? true : false;
$hotels_filter = [''];
foreach($hotels as $hotel){
    if($hotel['parking']){
        $hotels_filter[] = $hotel;
    }
}
echo "<pre>" . var_dump($hotels) .  "</pre>";
echo "<pre>" . var_dump($hotels_filter) .  "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-hotel</title>
</head>
<body>
    <div class="container my-5">
        <h1>PHP HOTEL</h1>
        <div class="row">
            <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="check">
                <label class="form-check-label" for="flexCheckDefault">
                    Solo con parcheggio
                </label>
            </div>
            </div>
            <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <?php foreach($hotel_keys as $key): ?>
                            <?php echo "<th scope='col'>$key</th>"?>
                        <?php endforeach ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if($check): ?>
                        <?php foreach($hotels as $hotel): ?>
                            <tr>
                                <?php foreach($hotel as $keys => $value): ?>
                                    <td>
                                        <?php
                                        if($keys == 'parking'){
                                            echo $value? 'Si':'No';
                                        }else{
                                            echo $value;
                                        }
                                        ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <?php foreach($hotels_filter as $hotel): ?>
                            <tr>
                                <?php foreach($hotel as $keys => $value): ?>
                                    <td>
                                        <?php
                                        if($keys == 'parking'){
                                            echo $value? 'Si':'No';
                                        }else{
                                            echo $value;
                                        }
                                            ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    
</body>
</html>