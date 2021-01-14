
<?php

require_once("config.php");

$usuario = new Usuario();

$usuario->loadById(27);

$usuario->update("Profesor", "$%¨&*");

echo $usuario;

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
//$list = Usuario::searchUsuario("root");

//echo json_encode($list);

// Login do usuario
// $login = new Usuario();

// $login->login("user", "123");
// echo $login;

//$aluno = new Usuario("Batata", "potato");

// Antes do Construtor
//$aluno->setDeslogin("Eduardo");
//$aluno->setDessenha("!@#$");

//$aluno->insert();

/*
$aluno = new Usuario();
$usuario = array();
$i = 0;

if(isset($_GET)){

    foreach ($_GET as $value) {
        $usuario[$i] = $value;
        echo $i;
        $i++;
    }

    //var_dump($usuario);

}

if(count($usuario) > 0){
    $aluno->setDeslogin($usuario[0]);
    $aluno->setDessenha($usuario[1]);
    $aluno->insert();
    echo $aluno;
}
*/





?>