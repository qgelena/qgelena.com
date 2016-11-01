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
	<ul>
		<li>Суфіксні дерева, масиви</li>
		<li>De Bruijn graph</li>
		<li>Overlap graph</li>
		<li>Hash function</li>
		<li>Приховані марківські моделі (Hidden Markov Models)</br>		Марківський ланцюжок - це ланцюжок подій в якому наступні події не залежать від минулих, крім через теперішнє.</br>
		<img src="../../static/markov_models.png"></br>
		Якщо є точка в просторі і відоме її місценаходження і швидкість, то можна визначити де вона буде в наступний момент часу в просторі, якщо її швидкість не змінюється. Ппри цьому не обов'язкво знати, що відбувалось раніше. Такий ланцюжок подій називається марківським. Застосовується для моделювання деяких випадкових подій, в тому числі для побудови достатньо простих моделейв який майбутнє залежить від терерішнього моменту, стану, але не враховує всю минулу історію подій.</br>
		Hidden Markov Models (HHM) (HMMER, Glimmer, GemeMark.hmm)</br>
		<b>HMM</b> — це деякий граф з станів. Часто нам відома структура графа, але не відомі параметри переходів між вершинами цього графа.</br>
		Наприклад, відомо, що є стан "ген" і "не-ген". Ми можемо переходити з одного стану в інший і навпаки, тобто це граф з двох вершин та чотирьох ребер, тому що з стану можна перейти в самого себе, тобто залишитись в тому ж стані в якийсь момент часу. На ребрах написані ймовірності, наприклад, 0,1, що ми перейдемо з стану 'ген' в стан 'не-ген' та навпаки з стану 'не-ген' в 'ген' і 0,9, що ми залишимось в вихідних положенннях.
		</li>
	</ul>
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