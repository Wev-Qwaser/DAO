<<<<<<< HEAD
<?php

require_once("config.php");

$usuario = new Usuario();
$usuario->loadById(77);

$usuario->delet();

echo $usuario;
#############################################################################################################################################################
/*
altera o usuario(atualiza)
$usuario = new Usuario();
$usuario->loadById(77);

$usuario->update("weverson" ,"10204030");

echo $usuario;
*/


#############################################################################################################################################################
/*
cria um novo usuário
$aluno= new Usuario("aluno","@alun0");

$aluno->insert();

echo $aluno;
*/
#############################################################################################################################################################
/*$login = new Usuario();
$login ->login("wever","102040");

echo $login;
*/

#############################################################################################################################################################
/*
$buscarUsuario = Usuario::buscarUsuario("ev");

echo json_encode($buscarUsuario);
*/

#############################################################################################################################################################
/*
pega a lista com todos os usuários pelo login
$pegarLista = Usuario::pegarLista();

echo json_encode($pegarLista);
*/
###############################################################################################################################################################

/*
$sql = new Sql();

$usuarios= $sql->select("SELECT * FROM tb_usuarios");


 echo json_encode($usuarios);
*/
/*
carrega apenas um usuário
$root= new Usuario();
$root ->loadById(2);
*/
=======
<?php

require_once("config.php");

$usuario = new Usuario();
$usuario->loadById(77);

$usuario->update("weverson" ,"10204050");

echo $aluno;



#############################################################################################################################################################
/*
cria um novo usuário
$aluno= new Usuario("aluno","@alun0");

$aluno->insert();

echo $aluno;
*/
#############################################################################################################################################################
/*$login = new Usuario();
$login ->login("wever","102040");

echo $login;
*/

#############################################################################################################################################################
/*
$buscarUsuario = Usuario::buscarUsuario("ev");

echo json_encode($buscarUsuario);
*/

#############################################################################################################################################################
/*
pega a lista com todos os usuários pelo login
$pegarLista = Usuario::pegarLista();

echo json_encode($pegarLista);
*/
###############################################################################################################################################################

/*
$sql = new Sql();

$usuarios= $sql->select("SELECT * FROM tb_usuarios");


 echo json_encode($usuarios);
*/
/*
carrega apenas um usuário
$root= new Usuario();
$root ->loadById(2);
*/
>>>>>>> 514a1cee1fbf649e70cb80636df7e7aecb541353
?>