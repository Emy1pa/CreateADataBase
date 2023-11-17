<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <title>CHbank</title>
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
   <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Balance</th>
                <th>Devise</th>
                <th>RIB</th>
                <th>Client ID</th>
                <th>Afficher les transations</th>
            </tr>
<?php
$sql = "SELECT id, balance, devise, rib, clientid FROM compte";
$result = $cnx->query($sql);

if (isset($_GET['comp']))
{
    $id = $_GET['comp'];
    $sql = "SELECT * FROM compte WHERE clientid = $id";
    $result = $cnx->query($sql);
}

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["id"]. " </td>
    <td> " . $row["balance"]. "</td>
    <td> " . $row["devise"]. " </td>
    <td>" . $row["rib"]. "</td>
    <td> " . $row["clientid"]. "</td>
    <td> <a href='transactions.php?trans=" . $row['clientid'] . "'>Afficher les transactions</a> </td>
    </tr><br>";  }
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
