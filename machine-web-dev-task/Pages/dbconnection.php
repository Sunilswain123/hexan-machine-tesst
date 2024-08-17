<?php
$HOSTNAME="127.0.0.1";
$USERNAME="root";
$PASSWORD="";
$DATABASE="task";
try{
    $connection=new mysqli($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
    if($connection->connect_error){
        echo "connection error".$connection->connect_error;
    }
    else{
        // echo "connection successfull";
    }
}
catch(Exception $e){
    echo "Check credentials <br>";
    echo $e->getMessage()."at line".$e->getLine();
}
?>