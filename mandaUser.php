<?php
	include 'conecta.php';

	$sql = 'SELECT * FROM tb_perfil_usuario';
    
    $response = array();

    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            array_push($response, $row);
        }
    }
    $conn->close();
    header('Content-Type: application/json');
    echo json_encode($response);

    ?>