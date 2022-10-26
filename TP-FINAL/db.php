<?php
 //$bdd = new PDO('mysql:host=localhost;dbname=tpfinal;charset=utf8', 'root','root');
///$server = "localhost";
//$user = "root";
//$pass = "root";
//$database = "tpfinal";

// $conn = mysqli_connect($server, $user, $pass, $database);

$conn=mysqli_connect('localhost','root','root','tpfinal');
if(!$conn){
    die('erreur de connexion a la base de donnée');
}else{
    }


 $pdo= new PDO('mysql:dbname=tpfinal;host=localhost','root','root');

   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>