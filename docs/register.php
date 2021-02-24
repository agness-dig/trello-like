<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){

  // Retrieve cridenticals
  $username = stripslashes($_REQUEST['username']); // Un-quotes a quoted string
  $username = mysqli_real_escape_string($conn, $username); 

  // Retrieve mail
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);

  // Retrieve password
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);

  // SQL Request + Password encrypt
    $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";

  // Database execution 
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>

<!-- HTML Form -->
<form class="box" action="" method="post">
  
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>