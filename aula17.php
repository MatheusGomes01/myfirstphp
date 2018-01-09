<?
session_start();

if($_SESSION['login']){
	echo "Secret area";
}else{
	echo "incorrect Login!";
}

unset($_SESSION['login'])

?>