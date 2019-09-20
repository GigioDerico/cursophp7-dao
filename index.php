<?php 


require_once("config.php");


// carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

// carregar uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("maria","123456");
//echo $usuario;

//criando um usuario via insert
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("Professor","456789");

echo $usuario;

 ?>