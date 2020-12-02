<?php
require_once("config.php");

//$sql = new Sql();

/*$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

//Carrega um Usuário
$usuario = new Usuario();
$usuario->loadById(2);
echo $usuario;


//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("se");
//echo json_encode($search);


//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
//echo $usuario;
?>
