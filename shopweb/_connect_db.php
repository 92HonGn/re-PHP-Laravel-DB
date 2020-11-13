<?php
function open_connect(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mysql:host=$servername;port=80;dbname=Ben_shop;charset=utf8";
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

  try{
    $conn = new PDO($dbname, $username, $password, $options);
    $conn->exec("SET CHARACTER SET utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
  }
  catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
  }
  
  return $conn;
}

function close_connect($conn){
  $conn -> close();
}

?>