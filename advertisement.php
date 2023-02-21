<?php
session_start();
include('./model/database.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/main.css">
    <title>Document</title>
</head>
<body>
<body>
<!-- header-->
<?php include('./view/header.php'); ?> 

<div class="buttons">
    <a href="index"> <button type="button"  >index page</button> </a>
    <a href="user"> <button>user page</button> </a>
    <a href="advertisement"> <button class="button1">advertisement page</button> </a>
</div>


<main class="main">
<h2>
    Advertisement table
    </h2>


   <?php 
    $query = "SELECT * FROM advertisements";
    $stmt = $conn->prepare($query);
    // EXECUTING THE QUERY
    $stmt->execute();
  
    $r = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // FETCHING DATA FROM DATABASE
    $result = $stmt->fetchAll();
    // OUTPUT DATA OF EACH ROW

      foreach ($result as $row) 
      {
     
          echo "<b>ID:</b>". str_repeat('&nbsp;', 2) . $row["id"].str_repeat('&nbsp;', 5). "<b>UserID</b>:".str_repeat('&nbsp;', 2). $row["userid"].str_repeat('&nbsp;', 5)." <b>Title:</b> ". $row["title"]. "<br><br>";
      }
      ?>
</main>

<!-- footer-->
<?php include('./view/footer.php'); ?>

    

</body>
</html>