<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

/*
// Chamar apenas 1 usuario
$usuario = new Usuario();
$usuario->loadById(6);

echo $usuario;
*/

// Chama todos os usuarios
//$list = Usuario::loadUsuarios();

// Chama o usuario atraves do login
$list = Usuario::searchUsuario("root");

echo json_encode($list);

$login = new Usuario();

$login->login("user", "123");

echo $login;

?>