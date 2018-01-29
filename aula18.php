<?php




?>

<html>
<head>
	<title> Working with form</title>	
</head>
<body>

	<form action="" method="post">
	
		<label>Name:</label>
		<input type="text" name="name" value="<?= $_POST['name'] ?>">
		<label>E-mail:</label>
	<input type="text" name="email" value="<?= $_POST['email'] ?>">
		<label>Message:</label>
		<textarea name="message"><?= $_POST['message'] ?></textarea>
		<input type="submit" value="submit">
	</form>

</body>
</html>

<?php

echo $_REQUEST['name']."<br/>";


?>

<html>
<head>
	<title> Working with form</title>	
	<style>
		fieldset input, fieldset textarea{
			width:100%;
			margin-bottom: 10px;
		}
		fieldset{
		width: 400px;	
		}
		legend{
			font-size: 26px;
		}


	</style>
</head>
<body>

	<form action="index.php" method="get">
	<fieldset>
		<legend>Sample form</legend>
		<label>Name:</label>
		<input type="text" name="name" value="<?=$_REQUEST['name']?>">
		<label>E-mail:</label>
	<input type="text" name="email" value="<?=$_REQUEST['email']?>">
		<label>Message:</label>
		<textarea name="message"><?=$_REQUEST['message']?></textarea>
		</fieldset>
		<input type="submit" value="submit">
	</form>

</body>
</html>