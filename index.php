<?php 

require_once("config.php");

/*

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

*/
/*
carrega apenas 1 usuario
$root = new Usuario();
$root->loadbyId(12);
echo $root;
*/
/*
carrega uma lista de usuario
$lista = Usuario::getList();
echo json_encode($lista);
*/
/*
carrega uma lista de usuario buscando pelo login
$search = Usuario::search("oo");
echo json_encode($search);
*/
/*
//carrega um ususario usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","1234");

echo $usuario;
*/
/*
criando novo usuario
$aluno = new Usuario("aluno2017", "888555");

$aluno->insert();

echo $aluno;
*/
/*
alterar um usuario
$usuario = new Usuario();

$usuario->loadbyId(13);

$usuario->update("ivan ribeiro", "011189");

echo $usuario;
*/
$usuario = new Usuario();

$usuario->loadbyId(5);

$usuario->delete();

echo $usuario;

 ?>