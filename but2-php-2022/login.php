<!doctype html>
<html lang="fr">
  <?php
  include 'modules/head.php';
  ?>
  <body class="text-center">
    <form action='/traitementLogin.php' class="form-signin" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Formulaire de connexion</h1>

      <label for="inputEmail">Adresse Email</label>
      <input type="email" name="Login" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

      <label for="inputPassword">Mot de passe</label>
      <input type="password" name="mdp" id="inputPassword" class="form-control" placeholder="Password" required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" name="remember"> Se souvenir de moi
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
</body>
</html>
