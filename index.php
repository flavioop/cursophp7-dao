<?php  

require_once("config.php");


//Carrega um usuário
//$jose = new usuario();
//$jose->loadbyId(3);
//echo $jose;

//Carrega uma lista com todos os usuários
//$lista = Usuario::getlist();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega usuário usando login e a senha
//$usuario = new Usuario();
//$usuario->login("root","1234586");
//echo $usuario;

//Criando um novo usuário
/*
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();
$usuario->loadById(10);
$usuario->update("professor","!@#$%¨&*");
echo $usuario;

?>