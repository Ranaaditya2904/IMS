<?php
mysqli_report(MYSQLI_REPORT_STRICT || MYSQLI_REPORT_ERROR);

function get_connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mca26";
    $port = 3307;

    $conn = null;
    
    try{
        $conn = new mysqli($host,$user,$pass,$db,$port);
        echo "Connected";
    }catch(mysqli_sql_exception $se){
        echo "Connection Error".$se->getMessage()."@line".$se->getLine();
    }
    return $conn;
}

get_connection();

?>