<?php
include("../pasta/aquirvo+extenão");// exemplo: include ("../conexao/conexao.php");
include("../pasta/fecha_arquivo+extensao");//include("../conexao/fecha_conexao.php");
include("funcao/funcao_select.php");

$user=htmlspecialchars_decode(strip_tags($REQUEST['login']));
$senha=htmlspecialchars_decode(strip_tags($REQUEST['senha']));

$consulta = select ("tabela", "*", "WHERE login = '$user'");

if($consulta == true){
	for($i=0;$i<count($consulta);$i++){  //contador pra validar o que tem dentro da tabela
		if(crypt($senha,$consulta[$i]['coluna']) == $consulta[$i]['coluna']){
			session_start();
			$_SESSION['usuario'] = $user;
			$_SESSION['logado'] = true;
			header("location:pagina da sessão");
	}else{
		header("location.pagina+extensao?erro=senha");#erro caso não exista a senha

	}
	}
}else{
	header("location.pagina+extensão?erro=usuario"); #erro caso não exista o usuario
}
?>