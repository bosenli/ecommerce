<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php');?>

    </head>
<body>
<div class="container" style="margin-top:30px">
<!-- Header Section #1-->
    <header class="row" style="margin-bottom:2px;">
        <?php include('header.php'); ?>
    </header>
<!-- Body Section #2-->
    <div class="row">
    <!-- Left-side Column Menu Section -->
        <div class="col-sm-2">
        <a href="register-view-users.php">view user</a>
        </div>
        <div class="col-sm-8">
        <?php include('carousel_ad.php'); ?>
        <?php include('search.php');?>
        </div>
        <div class="col-sm-2">
    
        </div>
    </div>

<!-- Footer Content Section #4-->
<br/>
<div class="row">
    <div class="col-sm-12">
         <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
            <?php include('footer.php'); ?>
         </footer>
    </div>
</div>
    </div>
</body>
</html>