<!doctype html>
<html lang="fr">
<?php include 'modules/head.php'; ?>

<body>
    <p>Prenom : <?php echo $_POST['Prenom'] ?></p>
    <p>Nom : <?php echo $_POST['Nom'] ?></p>
    <p>E-mail : <?php echo $_POST['E-mail'] ?></p>
    <p>Ski : <?php if (isset($_POST['ski']) == false) {
                    echo "unchecked";
                } else {
                    echo $_POST['ski'];
                } ?></p>

    <p>Roller : <?php if (isset($_POST['roller']) == false) {
                    echo "unchecked";
                } else {
                    echo $_POST['roller'];
                } ?></p>

    <p>Foot : <?php if (isset($_POST['foot']) == false) {
                    echo "unchecked";
                } else {
                    echo $_POST['foot'];
                } ?></p>

    <p>Basket : <?php if (isset($_POST['basket']) == false) {
                    echo "unchecked";
                } else {
                    echo $_POST['basket'];
                } ?></p>

    <p><?php echo $_POST['photo'] ?></p>

<?php
    move_uploaded_file(
        $_FILES['photo']['tmp_name'], __DIR__.'photo.TMP.png'
    );

    function traitementPhoto(){
        echo '<img src="/photoTMP.png">';
    }
?>
    <?php
    /*foreach ($_POST as $key => $value) {
        echo $value . "<br>";
    }
    */ ?>

    <?php /*fonction header pour envoyer en en-tête de page*/?>
</body>

</html>