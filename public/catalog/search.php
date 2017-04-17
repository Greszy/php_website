<?php 
    // Create connection
    global $page_content;
    global $title ;
    global $total;
    $display = 3; 
   
    if(isset($_POST['email']) && isset($_POST['name'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $result = insert_user($name, $email ) || confirm_query($result);
    } 

  
    if(isset($_POST['clear'])) {
        $liquor = "default";
        $price = "default";
        $country = "default";
        $p = 0;
        $selection = "";
        $datastring = "";
        $title = "";
        session_destroy();
    }  else { 
        $display = 3; 

        if(isset($_GET['p'])) {
           $page = $_GET['p']*$display; 
           $p = $_GET['p'];
        } else {
           $page = 0;
           $p = 0;
        }
    
   
        $liquor = "";
        if ( isset($_POST['liquor']) || isset($_SESSION['liquor'] ) ) {
            if( isset($_POST['liquor'])) {
                $liquor = $_POST['liquor'];
                $_SESSION['liquor'] = $_POST['liquor'];
            } else if (isset($_SESSION['liquor'])) {
                $liquor = $_SESSION['liquor'];
            }  
        }

        $price = "";
        if ( isset($_POST['price'])  || isset($_SESSION['price']) ) {    
            if(isset($_POST['price'])) {
                $price = $_POST['price'];
                $_SESSION['price'] = $_POST['price'];
            } else if (isset($_SESSION['price'])){
                $price = $_SESSION['price'];
            }  
        }

        $country = "";
        if ( isset($_POST['country']) || isset($_SESSION['country'])) {    
            if( isset($_POST['country'])) {
                $country = $_POST['country'];
                $_SESSION['country'] = $_POST['country'];
            } else if (isset($_SESSION['country'])) {
                $country = $_SESSION['country'];
            }  
        }
      
        //  Selection criteria for query 
        $selection = selection_criteria( $price, $liquor, $country ); 
        // Price range name
        $range = price_range_name( $price, $liquor, $country );

        // Selection criteria for display on top of the product list 
        $title = display_title( $liquor, $range, $country );

        // Display the product's information per page
        $page_contant = "";
        if ( $selection != "" ) {
            $result = find_products($selection, $page, $display);
            if ( !$result ) {
                 exit("Error!");     
            } 
            $page_content = display_products_page( $result );
        }
    }
?>