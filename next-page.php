<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Next-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    body{
      background:#023E45;
    }
    .container1{
      width:800px;
      height:580px ;
      color:#BFDB21;
    }
    h1{
      position: absolute;
      top: 5%;
      left: 35%;
    }
   
    .card{
      text-align: center;
      background: #BFDB21;
      color: black;
      font-weight: bold;
      width: 600px;
      height: 200px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%)
    }
  </style>
  <body> 
  <div class="container1">
    <h1>Registeration Result</h1>
  <?php

// echo '<pre>';
// print_r($_GET);
// echo '</pre>';
echo "
 
<div class='card'>
<div class='card-header'>
$_POST[username1] $_POST[username2]
</div>
<ul class='list-group'>
  <li class='list-group-item'>Email : $_POST[email]</li>
  <li class='list-group-item'>DOB : $_POST[dateofbirth]</li>
  <li class='list-group-item'>Gender : $_POST[gender]</li>
</ul>
</div>";

   
?>
  </div>

<?php include "page/footer.php";?>

 
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>










