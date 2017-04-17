<?php
    require_once('../../private/initialize.php');
    include(PRIVATE_PATH .'/function.php');
    include(PRIVATE_PATH .'/query_functions.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php  include(SHARED_PATH . '/header.php');   ?>
</head>

<body>
<?php
    // Create connection
    $conn = db_connect();
    
    // Select and display all users
    $result = find_all_users(); 
    if ( $result) {
        echo display_users( $result );
    } else  {
        exit("Error!");
    }  
    db_close($conn);
?>
</body>

</html>