<?php
    $username = "root"; 
    $password = "";   
    $host = "localhost";
    $database="smart";
   
    
    $server = mysql_connect($host, $username, $password);
    $connection = mysql_select_db($database, $server);
     $fromdate= $_POST["fromdate"];
      $todate= $_POST["todate"];
    
    $myquery = "SELECT  `fsdate`, `units` FROM  `fan_year` WHERE `fsdate` BETWEEN '$fromdate' AND '$todate'";
    $query = mysql_query($myquery);
    
    if ( ! $query ) {
        echo mysql_error();
        die;
    }
    
    $data = array();
    
    for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
    }
    
    
    $fp = fopen('device1_tsa_json_results.json', 'w');
    fwrite($fp, json_encode($data));
    fclose($fp);
    echo json_encode($data);
    mysql_close($server);
    
?>