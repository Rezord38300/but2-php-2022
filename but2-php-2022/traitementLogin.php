<?php $identifiant="bruno@ds";
$password="12345"; 
if($_POST['Login']==$identifiant && $_POST['mdp']==$password){
    if (isset($_POST['remember']) !== false) {
        setcookie('identifiant', $_POST['Login'], time() + 3600);
        setcookie('mdp', $_POST['mdp'], time() + 3600);
    }
    session_start();
    $_SESSION['user'] = 'admin';
}
?>

<?php if (isset($_SESSION['user']) !== false) : ?>
    <a href="/index.php">Vous êtes connecté, revenir à l'accueil </a>
<?php else : ?>
    <a href="/index.php">Vous n'êtes pas connecté, il y a une erreur d'identification, revenir à l'accueil </a>
<?php endif ?>