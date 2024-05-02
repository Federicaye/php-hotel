<?php
include __DIR__ . "/Controller/newTable.php";
include __DIR__ . "/Models/hotels.php";
$parking = '';
//se è stato selezionata opzione parcheggio e se non è stata selezionata all e se è stato selezionato il voto
if (isset($_GET['parking']) && $_GET['parking'] != 'all' && isset($_GET['vote']) && $_GET['vote'] !== 'all') {
    $vote = $_GET['vote'];
    $parking = $_GET['parking'];
    $hotels_filtered_parking = array_filter($hotels, fn($hotel) => (string) $hotel['parking'] == $parking);
    $hotels_filtered = array_filter($hotels_filtered_parking, fn($hotel) => $vote == $hotel['vote']);
    //se è stato selezionato opzione parcheggio e se non è stato selezinato all
} elseif (isset($_GET['parking']) && $_GET['parking'] != 'all' && isset($_GET['vote']) && $_GET['vote'] == 'all') {
    $parking = $_GET['parking'];
    $hotels_filtered =  array_filter($hotels, fn($hotel) => (string) $hotel['parking'] == $parking);

} elseif (isset($_GET['parking']) && $_GET['parking'] == 'all' || !isset($_GET['parking'])) {
    $hotels_filtered= $hotels;
}


if (isset($_GET['vote'])) {
    $vote = $_GET['vote'];
}
;
/* var_dump($hotels); */
/* var_dump($hotels_filtered); */
/* var_dump($parking); */
/* var_dump($vote); */
/* var_dump((string)$hotels[2]['parking']); */
/* var_dump($_GET['parking']); */

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
        <select name="vote" id="">
            <option value="all">all</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
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