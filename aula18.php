<?


?>

<html>
<head>
	<title> Working with form</title>
</head>
<body>

<form action="aula18.php" method="post">
	<label>Name:</label>
	<input type="text" name="name" value="<?= $_POST['name'] ?>">
	<label>E-mail:</label>
	<input type="email" name="email" value="<?= $_POST['email'] ?>">
	<label>Message:</label>
	<textarea name="message"><?= $_POST['message'] ?></textarea>

	<input type="submit" value="submit">
</form>

</body>
</html>