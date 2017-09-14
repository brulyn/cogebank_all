<?php
//Database Connection
try{
    $pdo = new PDO('oci:dbname=192.168.0.20:1521/cgbk', 'prod', 'prod');  
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){

}




?>