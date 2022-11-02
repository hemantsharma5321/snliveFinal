<?php

include("./includes/config.php");
$postid = $_GET['nid'];


$sql = "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id= $postid ";

$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo ($row['posttitle']) ?></title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="./css/index.css">
</head>

<body>
   <div class="container-fluid">
      <div class="row">
         <div class="col"><?php include("./includes/header.php") ?></div>

      </div>

      <div class="row">
         <div class="col-md-8">
            <div class="card" style="width: 100%;">
               <h2 class="card-title"><?php echo ($row['posttitle']) ?></h2>
               <img src="..." class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title"><?php echo ($row['posttitle']) ?></h5>
                  <p class="card-text"><?php echo ($row['postdetails']) ?></p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
            </div>

         </div>
         <div class="col-md-4">
            <!--sidebar-->
            <?php include("./includes/sidebar.php") ?>
         </div>
      </div>
   </div>

   <?php include('./includes/footer.php') ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>