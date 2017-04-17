<?php 
    require_once('../../private/database.php');

    // Find  all users
    function find_all_users(){
        global $conn;
        $sql = "SELECT * FROM users";
        $result_set = db_query($conn, $sql);
        return $result_set;
    }

    // Add user to database
    function insert_user($name, $email ){
        global $conn;
        $sql  = "INSERT INTO users ";
        $sql .= "( name , email ) ";
        $sql .= "VALUES ('" . $name . "', '" . $email . "')";
        $state_result = db_query($conn, $sql);
        return  $state_result;
    }

    // Find all products
    function find_selected_products($selection){
        global $conn;
        $sql  = "SELECT id FROM catalog ";
        $sql .= "WHERE " . $selection;
        $result_set= db_query($conn, $sql);
        return $result_set;
    }

    // Select product from database to display on single page
    // selection is criteria for selection ( price country, liquor)
    // page is number of pages to display
    // display is max number of products displayed on single page
    function find_products($selection, $page, $display) {
        global $conn;
        $sql  = "SELECT name, fullprice, country, description, pictfile ";
        $sql .= "FROM catalog WHERE " . $selection;
        $sql .= " LIMIT " . $page .", " . $display;
        $result_set = db_query($conn, $sql); 
        return $result_set;
    }

?>