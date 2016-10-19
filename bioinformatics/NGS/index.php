<!DOCTYPE html>
<html>
<head>
	<meta name='keywords' content='biology, Python, bioinfirmatics, testing, QA' charset='utf-8'/>
	<meta name='description' content="">
	<meta name='author' content="Alona Sychevska">
	<title>qgelena</title>
	<link rel='stylesheet' href='/static/style.css'/>
</head>
<body>
<header class='site-header'>
	<div id="title_header">
<?php 
include('../../include/header.php');
?>
	</div>
</header>
<div class="page_content">
<?php 
include('../../include/menu_bioinformatics.php')
?>
	<section id="text" class="inline-blk">
		<p>
			<h3>Послідовність етапів NGS:</h3>
			<ol>
				<li>Руйнування ДНК з отриманням фрагментів визначеної довжини</li>
				<li>Приєднання синтетичних олігонуклеотидних адаптерів до країв фрагментів</li>
				<li>Ампліфікація кожного фрагменту ДНК в окремому мікрореакторі з мікрочастинкою (емульсійна ПЛР) і/або безпосередньо на поверхні предметного скла (місткова ПЛР)</li>
				<li>Визначення нуклеотидної послідовності фрагментів ДНК</li>
				<li>Біоінформатичний аналіз даних (коротких прочитувань)</li>
			</ol>
		</p>
	</section>
<?php
include('../../include/contacts.php');
?>
</div>	
<?php 
include('../../include/footer.php');
?>			
</body>
</html>