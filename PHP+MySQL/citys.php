<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ciutats Filtrades per codi</title>
    <style>
   		table,td {
   			border: 1px solid black;
   			border-spacing: 0px;
   		}
      td{
        padding: 1em;
      }
   	</style>
  </head>
  <body>
    <?php
      $codigo = $_POST["codigo"];
      $conn =  mysqli_connect('localhost','nil','1234');
      mysqli_select_db($conn, 'world');
      $consulta = "SELECT co.`Name` Pais ,ci.`Name` Ciutat FROM `country` co,`city` ci WHERE co.`Code` = ci.`CountryCode` AND co.`Code`='$codigo';";
      $resultat = mysqli_query($conn, $consulta);
      if (!$resultat) {
            $message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
            $message .= 'Consulta realitzada: ' . $consulta;
            die($message);
      }
    echo "<table>
      <thead><td  colspan='2' align='center' bgcolor='cyan'>Llistat de ciutats</td></thead>
      <tbody>";
        while ($registre = mysqli_fetch_assoc($resultat)) {
          echo "\t<tr>\n";
          echo "\t\t<td>".$registre['Pais']."</td>\n";
          echo "\t\t<td>".$registre['Ciutat']."</td>\n";
          echo "\t</tr>\n";
       }
      echo "</table>";
     ?>
  </body>
</html>
