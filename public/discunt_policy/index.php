<?php
    require_once('../../private/initialize.php');
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
        <div class="row">
            <!--Start of sidebar-->
            <div class="col-md-2 col-xs-12" id="sidebar">
                 <?php include(SHARED_PATH . '/sidebar.php'); ?>   
            </div>
            <!--End of sidebar-->
            <!--Start of main content-->
            <div class="col-md-10 col-xs-12">
                <div class="row">
                    <?php include('discounts.php'); ?> 
                </div>
            </div>    
            <!--End of main content-->
        </div>
        <!--Start of filler-->
        <?php  for( $i = 0; $i < 5; $i++)  { echo "<br>"; } ?> 
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