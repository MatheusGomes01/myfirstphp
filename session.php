<?
session_start();

$login="usuario";
$senha="senha";

if($login=="usuario" and $senha=="senha"){
	$_SESSION['logado']=true;
	header("location:pagina");
}else{
	echo "incorrect Login!";
}



?>