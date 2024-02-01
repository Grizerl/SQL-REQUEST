<?php
$servername="localhost";
$username="root";
$password="";
$dbname="TEST";
// try{
// $conn=new PDO("mysql:host=$servername; dbname=$dbname", $username,$password);
// echo"Conection server <br>";
// }catch(PDOException $e){
//     echo"Connect fail". $e->getMessage();
// } 
// try{
//     $conn=new PDO("mysql:host=$servername; dbname=$dbname", $username,$password);
// $sql="CREATE DATABASE Test2";
// $conn->exec($sql);
// echo"CREAT <br>";
// }
// catch(PDOException $e){
//     echo"Connect fail". $e->getMessage();
// }
// try{
//     $conn=new PDO("mysql:host=$servername; dbname=$dbname", $username,$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// $sql="CREATE TABLE mysql(
//     name VARCHAR (30) NOT NULL,
//     username VARCHAR (30) NOT NULL,
//      password VARCHAR (30) NOT NULL)";
// $conn->exec($sql);
// }
// catch(PDOException $e){
// echo $sql.$e->getMessage();   
// }
// $conn=null;
// try{
//     $conn=new PDO("mysql:host=$servername; dbname=$dbname", $username,$password);
//     $conn->beginTransaction();
//  $conn->exec("INSERT INTO mysql(name,username,password)
//  VALUES('ALEX','PAVLIHA','14557')");
// $conn->exec("INSERT INTO mysql(name,username,password)
// VALUES('DIMA','PAVLIHA','145')");
// $conn->exec("INSERT INTO mysql(name,username,password)
// VALUES('OLEG','PAVLIHA','1455751')");
// $conn->commit(); 
// echo"record created <br>";
// }
// catch (PDOException $e){
//     $conn->rollBack();
// }
try{
    $conn=new PDO("mysql:host=$servername; dbname=$dbname", $username,$password);
    $sql="UPDATE mysql SET name='DIMA' WHERE name='OLEG'";
 $conn->exec($sql);
 echo"Change update";
}catch (PDOException $e){
    echo $sql.$e->getMessage();
}
?>
