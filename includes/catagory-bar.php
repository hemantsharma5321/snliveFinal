<style>
    <?php include './css/index.css' ?>
</style>
<?php
$sql = "Select tblcategory.CategoryName as categoryname from tblcategory";
$result = mysqli_query($conn, $sql);
?>
<div class="row-8">
    <div class="col-md-8">
    <ul class="list-inline scrool">
        <?php
        while ($row = mysqli_fetch_array($result)) { ?>
            <li class="list-inline-item typography">
              <?php  echo $row['categoryname']; ?>
            </li>

        <?php } ?>

    </ul>
    </div>
</div>