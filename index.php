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

$usuario = new Usuario();
$usuario->login("root","1234586");
echo $usuario;


?>