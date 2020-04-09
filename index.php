<?php
require_once "config.php";
/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/


/* ## Carrega um usuário
$root = new Usuario();
$root->loadById(2);
echo $root;
*/

/* Carrega um lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);
*/

/* Carrega uma lista através de uma busca pelo login
$lista = Usuario::search("l");
echo json_encode($lista);
*/

/* Carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("ramiassouza", "!@#$%");
echo $usuario;
*/

/* Criando um novo usuário
$aluno = new Usuario("Pietro", "159753");
//$aluno->setDeslogin("Ester");
//$aluno->setDessenha("asdf");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();
$usuario->loadById(5);
$usuario->update("Isadora", "asd321");
echo $usuario;
?>