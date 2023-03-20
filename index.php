<!-- PHP -->
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
        
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/app.css">
        <title>PHP Hotel</title>
    </head>
    <body>
        <div class="container">

            <table class="table">

                <thead>

                    <tr>

                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Distance To Center</th>

                    </tr>

                </thead>

                <tbody>

                    <?php
                    foreach ($hotels as $key => $value):
                        // var_dump($key);
                        // var_dump($value);
                        // var_dump($value['name']);

                        $hotel_name = $value['name'];
                        $hotel_desc = $value['description'];
                        $hotel_park = $value['parking'];
                        $hotel_vote = $value['vote'];
                        $hotel_dist = $value['distance_to_center'];
                    ?>

                    <tr>
                        <td><?php echo $hotel_name; ?></td>
                        <td><?php echo $hotel_desc; ?></td>
                        <td>
                            <?php 
                                if ($hotel_park === true) {
                                    echo 'yes';
                                } else {
                                    echo 'no';
                                }
                            ?>
                        </td>
                        <td><?php echo $hotel_vote; ?></td>
                        <td><?php echo $hotel_dist; ?></td>
                    </tr>
                    
                    <?php
                    endforeach;
                    ?>

                </tbody>
                
            </table>

        </div>
        
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
    </body>
</html>