<?
$data = array (
"title" => "School of Net",
"link" => "https://www.schoolofnet.com",
"content" =>
	array(
		array(
			"title" => "news 1",
			"resume" => "Summary of the matter 1",
			"text"=> "here the text 1"
			),
		array(
			"title" => "news 2",
			"resume" => "Summary of the matter 2",
			"text"=> "here the text 2"
			),
		array(
			"title" => "news 3",
			"resume" => "Summary of the matter 3",
			"text"=> "here the text 3"
			)
		)
	);
?>

<html>
<head>
<title><?= $data['title']?></title>
</head>
<body>
	
	<h1><a href="<?= $data['link']?>"><?= $data['title']?></a></h1>
	<hr>
	<? foreach ($data['content'] as $key => $value): ?>
	<h3><?=  $value ['title']?></h3>
	<strong><?=  $value ['resume']?></strong>
	<p><?=  $value ['text']?></p>
	<hr>
	<? endforeach; ?>
	<h3>Title</h3>
	<strong>Resume</strong>
	<p>News</p>



</body>
</html>


1921733
