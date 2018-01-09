<?

setcookie("color","red",time()+3600*24);

echo "Hello"." ".$_COOKIE['name'];

?>


<html>
<head>
	<title></title>
</head>
<body bgcolor="<?= $_COOKIE['color'] ?>">

</body>
</html>