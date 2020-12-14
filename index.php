<?php
require_once("config.php");

//$sql = new Sql();

/*$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

//Carrega um Usuário
//$usuario = new Usuario();
//$usuario->loadById(7);
//echo $usuario;


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

//Criando novo usuario
//$aluno = new Usuario("novo aluno", "@lun05s");
//$aluno->insert();
//echo $aluno;

//Alterando Usuário
//$usuario = new Usuario();
//$usuario->loadById(13);
//$usuario->update("professor", "pr0f3ss0r");
//echo $usuario;

//Deletando usuario
$usuario = new Usuario();
$usuario->loadById(13);
$usuario->delete();
echo $usuario;
?>
