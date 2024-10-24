<?php
$pdo = new PDO('mysql:host=localhost;dbname=colegio', 'root','');
$pdo ->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, FALSE);



//$conn = new mysqli();
//if($conn->connect_error){
//die("falha na conexao");
//}

//echo "conexao bem sucedida!"
?>