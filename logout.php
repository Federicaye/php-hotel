<?php 
session_start();
if(isset($_SESSION['userId'])) {
    $name = $_SESSION['name'];
    session_destroy();
    header('Location : login.php');
}else{
    header('Location : index.php');
}

header('location : index.php'); ?>
<main> </main>
<?php ?>