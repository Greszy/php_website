<?php
    define("DOMAIN", 'http://localhost:8080/store/new/public');
    $location = 'Location: '. DOMAIN . '/home';
    header($location);
    exit();
?>