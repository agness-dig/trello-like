<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<!-- PHP FORM -->
<?php
// CONFIG FILE
require('config.php'); 
session_start();

// REQUEST USERNAME AND PASSWORD
if (isset($_POST['username'])){
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);

  // SQL REQUEST
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error()); 
  $rows = mysqli_num_rows($result);

  // REDIRECT TO THE MAIN PAGE OR RETURN AN ERROR
  if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: index.php");
  }
  else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
<!-- HTML FORM -->
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<!-- SHOW PHP MESSAGES -->
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>