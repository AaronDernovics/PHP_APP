<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/main.css">
    <title>PHP app</title>
</head>

<body>
<!-- header-->
<?php include('./view/header.php'); ?> 

<div class="buttons">
    <a href="index"> <button type="button" class="button1" >index page</button> </a>
    <a href="user"> <button>user page</button> </a>
    <a href="advertisement"> <button>advertisement page</button> </a>
</div>


<main class="main">
    <h2>
        This is the index page, wehre you can navigate to user page or advertisement page 
    </h2>
</main>

<!-- footer-->
<?php include('./view/footer.php'); ?>



</body>
</html>