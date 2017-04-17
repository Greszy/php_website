<?php 
    $pagination ="";
    // Find total number selected pruducts
    if ( $selection != "" ) {
        $total = 0;
        $result = find_selected_products($selection);
        if ( $result ) {
            $total = db_num_rows($result);
        } else {
            exit("Error!");
        } 
    }


?>  

<h3>Product's List</h3> 
<h5><?php echo display_selection( $title) ?></h5>
 <?php  
     if ($total > 0 ) {
        // Count the number of pages and display pagination
        $page_numbers = ceil($total/$display);
        echo pagination_generation($p,  $page_numbers);
        // Display page content
    }
    echo $page_content;
?>