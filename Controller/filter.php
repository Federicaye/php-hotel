<?php 

if (!empty( $_GET['parking'])) {
$parking = $_GET['parking'];
$hotels_filtered = array_filter($hotels, fn($hotel) => $hotel['parking'] == $hotel['parking']);
} else {
    $hotels_filtered = $hotels;
}

