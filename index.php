<?php
session_start();
include("./includes/config.php");
?>
<!doctype html>
<html lang="hi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SNLive | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <div class="container-fluid">
        
        <div class="row">
            <?php include("./includes/header.php"); ?>
        </div>
        <div class="row"><?php include('./includes/catagory-bar.php')?></div>


        <div class="row">
            <div class="col-md border"> <?php include("./includes/mainNews.php"); ?> </div>
            <div class="col-4"><?php include("./includes/sidebar.php"); ?></div>
      </div>

      <div class="row"><?php include("./includes/footer.php"); ?></div>
 </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>