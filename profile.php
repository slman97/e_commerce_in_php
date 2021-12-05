<?php include("file/header.php"); ?>
<div class="container mb-5">
    <div class="row mt-5">
        <div class="col-xl-3 border-right">
            <div class="row">
                <h4><?php echo $_SESSION['email']; ?></h4>
            </div>
            <div class="row">
                <a class="btn btn-primary mt-4 border-right" style="color: #fff;border-right: indianred 2px; ">Edit Profile</a>
            </div>
        </div>
        <div class="col-xl-6 ml-3">
            <h4 style="text-align: center; color:lightskyblue; ">Cart</h4>
        </div>

    </div>
</div>
<?php include("file/footer.php"); ?>