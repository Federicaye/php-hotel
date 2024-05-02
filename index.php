<?php
include __DIR__ . "/Controller/newTable.php";
include __DIR__ . "/Models/hotels.php";
$parking = '';
if (isset($_GET['parking']) && $_GET['parking'] != 'all') {
    $parking = $_GET['parking'];
    $hotels_filtered = array_filter($hotels, fn($hotel) => (string)$hotel['parking'] == $parking);
    } elseif ($_GET['parking'] == 'all') {
        $parking = $_GET['parking'];
        $hotels_filtered = $hotels;
    };
    
/* var_dump($hotels); */
var_dump($hotels_filtered);
var_dump($parking);
var_dump((string)$hotels[2]['parking']);

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="1">parking yes</label>
        <input type="radio" name="parking" value="1">
        <label for="">parking no</label>
        <input type="radio" name="parking" value="">
        <label for="all">all</label>
        <input type="radio" name="parking" value="all">
        <input type="submit" value="send">
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">park</th>
                <th scope="col">vote</th>
                <th scope="col">distance to center</th>
            </tr>
        </thead>
        <tbody>
            <?php echo new_table($hotels_filtered) ?>

        </tbody>
    </table>
</body>

</html>