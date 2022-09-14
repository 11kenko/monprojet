<?php/*
mysqli_connect('mysql:host=127.0.0.1;dbname=bricekenko','root','')
mysqli_select_db()


$nom = 'mysql:host=127.0.0.1;dbname=bricekenko';
$username = 'root';
$password = '';
$option = [];

try{
   
}
catch(PDOException $e){
    die ("erreur.$e -> getMessage()");
}*/

$bd = new PDO('mysql:host=127.0.0.1;dbname=bricekenko', 'root' , '');
?>