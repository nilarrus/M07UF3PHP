<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Login Simple</title>
  </head>
  <body>
    <div class="">
      <h4>Login</h4>
<?php
    echo "<form class='' action='index.php' method='post'>
    <label>User:</label><input type='text' name='user' value=''><br/>
    <label>Password:</label><input type='password' name='paswd' value=''><br/>
    <input type='submit' value='Login'>
    ";
    echo "</form>";
    if($_POST != null){
      $ususario = $_POST['user'];
      $pasword = $_POST['paswd'];
      $conn = mysqli_connect('localhost','nil','1234');
      mysqli_select_db($conn,'Login');
      $paswordSHA =  hash('SHA512',$pasword);
      $consulta = "SELECT User, Pasword FROM login WHERE User ='$ususario' AND Pasword =SHA2('$pasword',512);";
      $resultat = mysqli_query($conn,$consulta);
      if(!$resultat){
        $message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
        $message .= 'Consulta realitzada: ' . $consulta;
        die($message);
      }
      $numColumnas = mysqli_num_rows($resultat);
      if($numColumnas==1){
        echo "<h2 style='color:green'>Login correcte</h2>";
      }else{
        echo "<h2 style='color:red'>Login Incorrecto</h2>";
      }

    }
     ?>
     </div>
  </body>
</html>
