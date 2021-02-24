<? dump($_POST['email']);
   dump($_POST['password']); ?>

<div id="login-body">

<form class="box" action="<?= $router->generate('connect') ?>" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="email" class="box-input" name="email" placeholder="Email d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="<?= $router->generate('register') ?>">S'inscrire</a></p>
</form>

</div>