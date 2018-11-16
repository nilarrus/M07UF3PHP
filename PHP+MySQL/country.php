<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Filtratge amb world</title>
  </head>
  <body>
    <h1> Eligeix un codi de Pais </h1>
    <?php
   		//conexion
   		$conn =  mysqli_connect('localhost','nil','1234');

      //seleccionem la bbdd
   		mysqli_select_db($conn, 'world');

      //fem la consulta
   		$consulta = "SELECT `Code`,`Name` FROM `country` ORDER BY `Name`;";

   		//enviem la query a la SGBD.
   		$resultat = mysqli_query($conn, $consulta);

   		//Mostrem si la query lo pot realitzar o no.
   		if (!$resultat) {
       			$message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
       			$message .= 'Consulta realitzada: ' . $consulta;
       			die($message);
   		}

   	?>

    <form class="citys" action="citys.php" method="post">
      <!--<select class="citys" name="codigo">-->

      <?php
         while ($registre = mysqli_fetch_assoc($resultat)) {
          echo "<label><img src=banderas/".$registre['Name'].".png><input type='radio' name='codigo' value='".$registre['Code']."'>".$registre['Name']."</label><br>";
        }
        ?>
      <!--</select>-->
      <button type="submit" name="button">Filtrar</button>
    </form>

  </body>
</html>
