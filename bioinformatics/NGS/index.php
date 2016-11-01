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
<?php 
include('../../include/header.php');
?>
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
			<a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%80%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%BA%D0%BE%D1%80%D0%BE%D1%82%D0%BA%D0%B8%D1%85_%D0%BF%D1%80%D0%BE%D1%87%D1%82%D0%B5%D0%BD%D0%B8%D0%B9#.D0.A1.D1.80.D0.B0.D0.B2.D0.BD.D0.B8.D1.82.D0.B5.D0.BB.D1.8C.D0.BD.D1.8B.D0.B5_.D1.85.D0.B0.D1.80.D0.B0.D0.BA.D1.82.D0.B5.D1.80.D0.B8.D1.81.D1.82.D0.B8.D0.BA.D0.B8">Картирование коротких последовательностей.wiki</a>
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