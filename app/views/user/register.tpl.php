<div id="login-body">
<form class="box" action="" method="post">
  
    <h1 class="box-title">S'inscrire</h1>
    <input type="text" class="box-input" name="pseudo" placeholder="Nom d'utilisateur" required />
    <input type="email" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="<?= $router->generate('login') ?>">Connectez-vous ici</a></p>
</form>
</div>