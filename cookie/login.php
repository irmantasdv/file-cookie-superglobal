<?php
$enteredName = $_POST['name'];
$enteredPassword = $_POST['password'];
$dummyName = 'pirmas';
$dummyPassword = 'antras2';
if($enteredName === $dummyName && $enteredPassword === $dummyPassword){
    if(!isset($_COOKIE['login'])){
        setcookie("login",1,time()+ 3600);
    }
    header("Location: ./manopaskyra.php");
} else {
    header("Location: ./404.php");
}
?>