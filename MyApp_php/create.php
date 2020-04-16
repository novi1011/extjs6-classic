<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="personnel";
    
    $conn = new mysqli ($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die ("connection failed:" . $conn->connect_error);
    }
    $callback = $_REQUEST['callback'];
    $records = json_decode($_REQUEST['records']);
    $name = $records->{"name"};
    $brands = $records->{"brands"};
    $color = $records->{"color"};
    //create the output object
    $output = array();
    $success = 'false';
    $query = "insert into cars (name,brands,color) values ('$name', '$brands', '$color') ";
    
    if ($conn->query($query)==TRUE) {
        $success = 'true';
    }else{
        $success = 'false';
        $error = $conn->error; 
    }
    //start output
    if ($callback) {
        header('Content-Type: text/javascript');
        echo $callback . '({"success": '.$success.', "items": ' . json_encode($output) . '});';
    }else{
        header('Content-Type: application/x-json');
        echo json_encode($output);
    }
    $conn->close();

?>