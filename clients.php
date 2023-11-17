
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>E-Banking</title>
</head>

<body>

<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imane";


// Create connection

$creerdb = "create database if not exists imane" ;


$cnx = new mysqli($servername, $username, $password,$dbname);
?> -->
<header>
<a href="index.php" class="logo">E-Banking</a>
        <nav class="navigation">
            <a href="clients.php">Clients</a>
            <a href="comptes.php">Comptes</a>
            <a href="transactions.php">Transactions</a>
        </nav>
    </header>
    
    
<section class ="tabclient">
    <!-- <h1>Clients</h1> -->

    <table >
        <thead>
            <tr >
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Nationalité</th>
                <th>genre</th>
                <th>Comptes</th>
            </tr>
<?php
$sql = "SELECT id, nom, prenom, dateNais, nationalite, genre FROM Client";
$result = $cnx->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["id"]. " </td>
    <td> " . $row["nom"]. "</td>
    <td> " . $row["prenom"]. " </td>
    <td>" . $row["dateNais"]. "</td>
    <td> " . $row["nationalite"]. "</td>
    <td>" . $row["genre"].  "</td>
    <td> <a href='comptes.php?comp=" . $row['id'] . "'>Afficher les comptes</a> </td>
    </tr>"; 
 }
} else {
 /* echo "0 results";*/
}

$cnx->close();
?>

     </thead>
        
           
    </table>
   
    </section>
    <footer>
      <p>&#169; BY SOUAOUTI IMANE</p>
    </footer>
</body>
</html>


