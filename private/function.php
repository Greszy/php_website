<?php
    require_once('../../private/database.php');

     // Display the table with user information
    function display_users( $result_set ){
        $datastring = '<div class="col-xl-4" align="center">';
        $datastring =  $datastring.'<div><h1><span class="label">Customer\'s Mail List</span></h1></div>';    
        
        $total = db_num_rows($result_set);
        
        if ($total > 0) {
           $datastring =  $datastring.'<table class="table table-bordered">';
           $datastring =  $datastring.'<thead>';
           $datastring =  $datastring.'<tr>';
           $datastring =  $datastring.'<th>#</th>';
           $datastring =  $datastring.'<th>Customer\'s Name</th>';
           $datastring =  $datastring.'<th>Customer\'s Email</th>';
           $datastring =  $datastring.'</tr>';
           $datastring =  $datastring.'</thead>';
           $counter = 1;
           while($row = db_fetch_assoc($result_set)) {
                $datastring = $datastring.'<tbody>';
                $datastring = $datastring.'<tr>';
                $datastring = $datastring.'<th scope="row">'.$counter.'</th>';
                $datastring = $datastring.'<td>'.$row["name"].'</td>';
                $datastring = $datastring.'<td>'.$row["email"].'</td>';  
                $datastring = $datastring.'</tr>';
                $datastring = $datastring.'<tbody>';
                $counter += 1;
            } 
            $datastring = $datastring.'</table>';
            } else { 
                $datastring = $datastring.'<h4>0 results</h4>';
            } 
                  
        $datastring = $datastring.'</div>';
        return $datastring;	
    }


    // Display the product's information
    function display_products_page( $result_set ){
        $datastring = '';
        $total = db_num_rows($result_set);
        if ( $total > 0 ) {
            $datastring = '<div class="row">';
            // output data;
            while($row = db_fetch_assoc($result_set)) {
               $datastring = $datastring.'<div class="col-xs-3" align="center">';
               $datastring = $datastring.'<img align="center" height="150" class="img-responsive" src="image/'.$row["pictfile"].'"></img></div>';
               $datastring = $datastring.'<div class="col-xs-8"><h3>'.$row["name"].'</h3><p><h5><b>'.$row["fullprice"].'</b><br/>
                                    '.$row["country"].'<br/>'.$row["description"].'</h5><br/<br></p></div>';
            }   
            $datastring = $datastring.'</div>';
        } else {
            $datastring = $datastring.'<h4>0 results</h4>';
        }
        return $datastring;
    }  

    // Display the selection criteria
    function display_title( $liquor, $range, $country ){
        $title = "";
        if( $liquor != "" && strcmp( $liquor, "default") != 0 ){
            $title = '<b>Selection</b> -> Liquor : '. $liquor;
        } 

        if($range != "" && strcmp($price, "default") != 0 ){
            if ( $title == "" ) {
                $title = '<b>Selection</b> -> Price Range : '. $range;
            } else {
             $title = $title.' -> Price Range : '. $range;
            }
        } 
        if($country != "" && strcmp($country, "default") != 0 ){
            if ( $title == "" ) {
                $title = '<b>Selection</b> -> Country : '.$country;
            } else {
                 $title = $title.' -> Country : '.$country;
            }
        } 
        return $title;
    }  

    // Generate selection criteia for query
    function  selection_criteria( $price, $liquor, $country ) {
        $selection = "";
        if( $price != "" && strcmp( $price, "default") != 0 ) {
            if(strcmp( $price, "range10") == 0) {                              
                $selection = '( price <= 10 )';
            }
            if(strcmp( $price, "range25") == 0) { 
                $selection = $selection.'( price >= 10 AND price <= 25 )';
            }
            if(strcmp( $price, "range50") == 0) {  
                $selection = $selection.'( price >= 25 AND price <= 50 )';
            }
            if(strcmp( $price, "range75") == 0) { 
                $selection = $selection.'( price >= 50 AND price <= 75 )';
            }
            if(strcmp( $price, "range100") == 0) { 
                $selection = $selection.'( price >= 75 AND price <= 100 )';
            }
            if(strcmp( $price, "range101") == 0) { 
                $selection = $selection.'( price >= 100 )';
            }
        } 
        if( $liquor != "" && strcmp( $liquor, "default") != 0 ){
            if ( $selection == "" ) {
                $selection = '(varietal = "'.$liquor.'")';
            } else {
                $selection = $selection.' AND '.'(varietal = "'.$liquor.'")';
            }
        }
        if( $country != "" && strcmp($country, "default") != 0 ){
            if ( $selection == "" ) {
                $selection = '(country = "'.$country.'")';
            } else {
                $selection = $selection.' AND '.'(country = "'.$country.'")';
            }
        }
        return $selection;
    }

    //  Price range description
    function  price_range_name( $price, $liquor, $country ) {
        $range = "";

        if( $price != "" && strcmp( $price, "default") != 0 ) {
            if(strcmp( $price, "range10") == 0) {                              
                $range = "under $10";
            }
            if(strcmp( $price, "range25") == 0) { 
                $range = "$10 - $25";                             
            }
            if(strcmp( $price, "range50") == 0) {  
                $range = "$25 - $50";                            
            }
            if(strcmp( $price, "range75") == 0) { 
                $range = "$50 - $75";                             
            }
            if(strcmp( $price, "range100") == 0) { 
                $range = "$75 - $100";                             
            }
            if(strcmp( $price, "range101") == 0) { 
                $range = "over $100";                             
            }
        } 
    } 

    // create pagination to select the page
    function pagination_generation($page,  $number_pages) {
        $line = '<ul class="pagination"><li><a href="index.php?p=0" >&laquo;</a></li>';
        for($i = 0; $i < $number_pages; $i++){
            if ( $i == $page ) {
                $line .= '<li class="active"><a href="index.php?p=' . $i . '">' . ($i + 1). '</a></li>';
            } else {
                $line .= '<li><a href="index.php?p='. $i . '">'. ($i + 1) . '</a></li>';
            }
        } 
        $line .= '<li><a href="index.php?p=' . ($number_pages - 1) . '">' . '&raquo;</a></li></ul>';
        return $line;
    }

    // Display selection criteria on top of the list
    function display_selection( $title ){
        if( $title != "" ){
            return $title; 
        } else { 
            return  "<b>Selection</b> -> empty";   
        }
    }
  
?> 