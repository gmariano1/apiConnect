<?php
include 'conecta.php'

//recebe os valores do usuario nome, email, senha, genero e localização via requisição HTTP (decodeJSON).
$nome = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['password'];


$sql = "INSERT INTO tb_perfil_usuario(nome, uk_email, senha) VALUES ($nome, $email, $senha)";

$resultado = mysqli_query($conn,$sql);