<?php 
session_start();
if(isset($_SESSION['userId'])){
    header('Location: index.php');
}
include __DIR__ .'/../Models/users.php';
if (!empty($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
$authenticated = array_filter($users, function($user) use($email, $password){
return $user['email'] == $email && $user['password'] == $password;
});
if(count($authenticated) > 0){
    $user = array_shift($authenticated);
    $_SESSION['userId'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    header('Location: index.php');
}else {
header('Location: login.php?error=1');
}

}