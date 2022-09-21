<?php
$enteredName = $_POST['name'];
$enteredPassword = $_POST['password'];
$dummyName = 'pirmas';
$dummyPassword = 'antras2';
if($enteredName === $dummyName && $enteredPassword === $dummyPassword){
    header("Location: ./manopaskyra.php");
} else {
    header("Location: ./404.php");
}
?>