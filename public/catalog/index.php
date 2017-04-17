<?php
    session_start(); 
    require_once('../../private/initialize.php');
    include(PRIVATE_PATH .'/function.php');
    include(PRIVATE_PATH .'/query_functions.php');
    $conn = db_connect(); 
    include('search.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php  include(SHARED_PATH . '/header.php');   ?>
</head>
 <body>
    <!-- Start of container-->
    <div class="container titles">
        <!--Start of header-->
        <div class="row" id="header">
            <div class="col-xs-12 text-center">
                <h1>Greenpoint Wine &amp; Spirits</h1>
            </div>
        </div>
        <!--Start of navbar-->
        <div class="row">
             <div class="navbar navbar-default col-xs-12 container">
                <?php include(SHARED_PATH . '/menu.php'); ?>
            </div>
        </div>
        <!--End of navbar-->
        <!--Start of content-->
        <div class="row">
            <!--Start of email list-->
            <div class="col-md-2 col-xs-12" id="sidebar">
                <?php include('email.php'); ?>    
            </div>
            <!--End of email list--> 
            <!--Start of selection-->
            <div class="col-md-2 col-xs-12" >
                <?php include('selection.php'); ?>
            </div>
            <!--End of selection-->
            <!--Start of product list-->
            <div class="col-md-8 col-xs-12"> 
                <?php include('products.php'); ?>
            </div>
            <!--End of product list-->
        </div>
        <!--End of content-->
        <!--Start of filler-->
        <?php  
            $total = 0; 
            if ($total == 0 ) { for ($x = 0; $x <= 23; $x++)  { echo "<br>"; } } 
            if ($total == 1 ) { for ($x = 0; $x <= 21; $x++)  { echo "<br>"; } } 
            if ($total == 2 ) { for ($x = 0; $x <= 12; $x++)  { echo "<br>"; } } 
            if ($total == 3 ) { for ($x = 0; $x <= 4; $x++)  { echo "<br>"; } }   
         ?>     
         <!--End of filler-->
         <!--Start of footer-->
        <div class="navbar navbar-inverse row" role="navigation">
            <div class="col-xs-12">
                <?php include(SHARED_PATH . '/footer.php'); ?>  
            </div>
        </div>
         <!--End of footer-->
    </div>
    <!-- End of container-->
    <!--Google Analytic-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-88631424-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>
<?php db_close($conn); ?>