<?php
require_once "includes/database.php";
require_once "includes/register-inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP MySQL</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<header>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
  </nav>
</header>

<?php

/*
$sql = "SELECT * FROM users WHERE id = 1";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);

    if($rowCount > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo $row['username'] . "<br>";
        // echo $row['username'] . $row["password"] . "<br>";
      }
    } else {
      echo "No results found.";
    }
*/
?>
