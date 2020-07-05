<?php
    $server = 'localhost';
    $user = 'admvoluntario';
    $senha = 'trabalhovoluntario1';
    $dbname = 'voluntarios';
    $conn = new mysqli($server, $user, $senha, $dbname);
    if($conn->connect_error){
        die("Conexão falhada.". $conn->connect_error);
    }
    
?>