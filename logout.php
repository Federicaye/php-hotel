<?php 
session_start();
if(isset($_SESSION['userId'])) {
    $name = $_SESSION['name'];
    session_destroy();
    header('Location : index.php');
}else{
    header('Location : login.php');
}
 ?>
<main> </main>
<?php ?>