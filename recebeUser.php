<?php
include 'conecta.php'

//recebe os valores do usuario nome, email, senha, genero e localização via requisição HTTP (decodeJSON).
$nome;
$email;
$senha;
$genero;
$regiao;


$sql = "INSERT INTO tb_perfil_usuario(nome, uk_email, senha, regiao) VALUES ($nome, $email, $senha, $genero, $regiao)";