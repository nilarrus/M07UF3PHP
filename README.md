## Exercici PHP+MySQL
#### Creació Base de dades:
1. Utilitzem el link següent per descarregar la base de dades i descomprimeixes el arxiu.
2. Obrim el terminal entrem al **MySQL** amb la línia següent: `$ mysql -u user -p `.
3. Dins el **MySQL** crearem una base de dades buida per indexar el .sql :` mysql> create database "nom"`.
4. Executem la següent línia per llançar el .sql a la bbdd: `sudo mysql -u "user" -p world < ruta/world.sql`
5. Entrar en la línia següent del codi i canviar les credencials a tots els arxius que estigui la línia: `$conn =  mysqli_connect('localhost','user','password'); `
