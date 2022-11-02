<!-- <style>
    <?php include './css/mainNews.css' ?>
</style> -->
<?php
if (isset($_GET['$pageno'])) {
    $pageno = $_GET['$pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno - 1) * $no_of_records_per_page;


$total_pages_sql = "SELECT COUNT(*) FROM tblposts";
$result = mysqli_query($conn, $total_pages_sql);

$total_rows = mysqli_fetch_array($result)[0];

$total_pages = ceil($total_rows / $no_of_records_per_page);

$query = mysqli_query($conn, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 
order by tblposts.id desc 
 LIMIT $offset, $no_of_records_per_page");
?>

<div class="container">

    <div class="row ">

        <?php while ($row = mysqli_fetch_array($query)) { ?>

            <div class="col-lg-6" onclick="navigateToDetails('<?php echo $row['pid'] ?>')">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./admin/postImages/AmitShahsurajkund.jpg" class="img-fluid rounded-start thumbnail-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo($row['posttitle'])?></h5>
                                
                                <p class="card-text"><small class="text-muted"><?php echo ($row['postingdate']) ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- <img src="./admin/postImages/solar_eclipse_1664520290.jpeg" class="rounded float-start" alt="...">


                <p><?php echo ($row['posttitle']) ?></p>
                <p><?php echo ($row['postingdate']) ?> </p> -->


            </div>
        <?php } ?>


    </div>
    <br>
    <script>
        const navigateToDetails = (pid) => {

            window.location.href = `./news-details.php?nid=${pid}`;
        }
    </script>

</div>