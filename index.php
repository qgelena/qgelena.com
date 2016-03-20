<!DOCTYPE html>
<html>
<head>
	<meta name='keywords' content='biology, Python, bioinfirmatics, testing, QA' charset='utf-8'/>
	<meta name='description' content="">
	<meta name='author' content="Alona Sychevska">
	<title>qgelena</title>
	<link rel='stylesheet' href='/static/style.css'/>
	<script src="/static/script.js"></script>
</head>
<body onload="onpageload();">
<header class='site-header'>
		<h1 id="title_header"class="inline"><img src="/static/logo.png"></h1>
<?php 
include('include/header.php');
?>
</header>
<div class="page_content">
	<aside class="inline-tbl aside-size">
	</aside>
	<section id="text" class="inline-tbl">
		<h2>About the project</h2>
		<h2>About me</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras consequat neque eget feugiat ultrices. Etiam id feugiat neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec elementum imperdiet arcu, a rhoncus odio euismod non. Vivamus rhoncus blandit quam, ac iaculis arcu rhoncus ac.<img id="crazyscientist" src='/static/crazyscientist.png'  align="right" width="160" height="160"/> Nulla sodales luctus nibh, sit amet iaculis mauris bibendum ac. Cras consectetur tellus arcu, eget elementum ligula fermentum non. Integer pulvinar lacinia velit, et pulvinar quam. Nulla iaculis urna risus, ultrices semper odio molestie a. Integer dapibus dui at sodales consectetur. Proin pretium bibendum egestas. Donec ornare elit quis imperdiet egestas. Morbi eu nisi at massa pharetra consequat.
		</p>
		<p>Maecenas pretium lacus ac dolor sollicitudin, euismod malesuada erat tristique. Curabitur id enim ac sem porttitor mattis eget in felis. Etiam ac finibus tellus, commodo cursus leo. Quisque vel ultrices nisi, ut posuere enim. Donec faucibus molestie rutrum. Vestibulum iaculis at est porttitor pharetra. Nulla lorem justo, finibus non leo a, finibus aliquet est. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam feugiat massa sit amet ultrices lacinia.
		</p>
	</section>
	<aside id="users" class="inline-tbl aside-size">
		<figure>
			<a href="/users"><figcaption>Users</figcaption></a>
		</figure>
		<!--div id="message">	
			<form action="/python/index.htm" method="get"><br/>
				<label for='nick'>Your nickname</label><input type='text' name='nick' id='nick' placeholder='your nickname'><br/>
				<label for='password'>Your password</label><input type='password' id='password' name='password'><br/>
				<input type="checkbox" name='remember' value="3">save<br>
				Sex<input type="radio" value="male" name="sex">male|<input type="radio" value="female" name='sex'>female<br/>
				<textarea name='comment' cols='40' rows="10" placeholder='message'></textarea><br/>
				<input type='submit' name="submit" value="send">
			</form>
		</div-->	
	</aside>
<?php 
include('include/footer.php');
?>			
</div>
</body>
</html>
