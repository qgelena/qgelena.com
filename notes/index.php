<!DOCTYPE html>
<html>
<head>
	<title>qgelena</title>
	<meta name='author' content="Alona Sychevska">
	<meta charset='utf-8'/>
	<link rel='stylesheet' href='/static/style.css'/>
</head>
<body>
<header class='site-header'>
	<div id="title_header">
		<h1 class="inline">my notes</h1>
		<img src="/static/Notes.png" width="70" class="inline" />
	</div>
<?php 
include('../include/header.php');
?>		
</header>
<div class="page_content">
	<div id="text">	
		<form>
		<textarea name='comment' cols='100' rows="10" placeholder='message'></textarea><br>
			<input type='submit' name="submit" value="send">
		</form>
	</div>
</div>
<?php 
include('../include/footer.php');
?>
</body>
</html>	