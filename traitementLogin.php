<?php $identifiant="bruno@ds";
$password="12345"; 
if($_POST['Login']==$identifiant && $_POST['mdp']==$password){
    session_start();
    $_SESSION['user'] = 'admin';
}
?>