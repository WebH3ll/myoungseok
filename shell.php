<?php
    $ip = $_GET['ip'];
    $query = 'nslookup '.$ip;   
    echo system($query);
?>