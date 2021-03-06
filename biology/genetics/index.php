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
include('../../include/menu_biology.php')
?>
	<section id="text" class="inline-blk">
	 <p>
	 	<h3>Система трьох доменів</h3>
	 	<img height="600" width="800" src="../../static/sys_tree.jpg ">
	 </p>
	<p>
		<h3>Центральна догма молекулярної біології</h3>
		<img src="../../static/RealisationOfGenesInProEucaryotes.jpg">
	</p>
	<p>
		<h3>ORF</h3>
		У процесі синтезу білка триплети зчитуються з нуклеотидного тексту один за одним: сусідні триплети не перекриваються, між ними немає проміжків. Будь яка послідовність нуклеотидів може бути прочитана трьома різними способами, тобто вона містить три рамки зчитування. Нуклеотидна заміна може зумовити зміну змісту кодона - амінокислотну заміну, а видалення хоча б одного нуклеотиду привести до зсуву рамки зчитування, тобто заміни змісту всіх кодонів, розташованих нижче такого втраченого нуклеотиду (чи ділянки, довжина якої не є кратною трьом).
		<figure>
			<img src="../../static/ORF.png">
			<figcaption><i>Рисунок. Три можливі рамки зчитування, одна з яких (позначена червоними дужками) відкрита</i></figcaption>
		</figure>
		Рамка, яка розташована між стартовим (найчастіше роль стартового при білковому синтезі відіграє метіоніновий кодон AUG) і стоп-кодоном, називається відкритою рамкою зчитування (ORF, open reading frame). Отже, кодуюча частина білкового гена обов'язково містить відкриту рамку зчитування.</br>
		<a href="https://en.wikipedia.org/wiki/Open_reading_frame#Six-frame_translation">ORF.wiki</a>
	</p>
	<p>
	<h3>Організація геномів</h3>
		Всі гени (сукупність генів даного організму називають <b>генотипом</b>) можна поділити на дві групи: гени, кінцевим продуктом яких є певні функціональні молекули РНК (<i>гени РНК</i>), і гени, у послідовності яких відповідно до генетичного коду записано інформацію про послідовність амінокислот у складі білків (<i>білкові гени</i>).
		<b>Гени РНК кодують різноманітні молекули РНК, що не піддаються трансляції:</b>
		<li>рРНК – рибосомні РНК (компоненти рибосом);</li>
		<li>тРНК – транспортні РНК (ключовий елемент системи трансляції);</li> 
		<li>маленькі ядерні РНК;</li>
		<li>маленькі ядерцеві РНК;</li>
		<li>мікро-РНК;</li>
		<li>молекули РНК, що є компонентами деяких ферментів;</li>
		<li>інші види РНК, із яких ще не для всіх з'ясовані їхні функції.</li>
		 Для того, щоб відбулась експресія генетичної інформації (через синтез РНК і далі – білка), не менш важливими є регуляторні послідовності ДНК, які (за рахунок спорідненості до специфічних білків) використовуються для вмикання / вимикання транскрипції як першої стадії експресії гена.</br> 
		 Ділянка ДНК, яка може вважатися геном, має містити кодуючу послідовність із записаною інформацією про продукт, а також певний набір регуляторних елементів послідовності, від яких залежить запуск / блокування процесу транскрипції, шлях зчитування інформації тощо.</br> 
		 У кожній клітині багатоклітинного організму міститься кілька (іноді до кількох десятків) молекул ДНК – їхній набір однаковий для всіх клітин. Ця ДНК містить не тільки гени. Сукупність послідовностей ДНК у клітинах даного організму називається <b>геномом</b>. У прокаріотичних геномах кодуючі послідовності становлять близько 95 %, тоді як частка кодуючих послідовностей у геномах еукаріотів не перевищує 3 %.</br>
		Кодуючі ділянки генів займають практично всю вірусну ДНК.
		 Геном Escherichia coli представлений однією циркулярною молекулою ДНК (так званою бактеріальною хромосомою) довжиною 4,6 млн пар основ. Близько 90 % цієї ДНК припадає на кодуючі послідовності ~4,1 тис. білкових генів і ~120 генів РНК, що не транслюються.
		 Еукаріотична ДНК знаходиться у клітинному ядрі у складі хромосом , кожна хромосома містить одну гігантську лінійну молекулу ДНК.
		 Послідовності, що повторюються, зосереджені, зокрема, на кінцях
		 хромосом (теломери) та в зонах прикріплення хромосом до веретена поділу при <a href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B8%D1%82%D0%BE%D0%B7">мітозі</a> та <a href="https://uk.wikipedia.org/wiki/%D0%9C%D0%B5%D0%B9%D0%BE%D0%B7">мейозі</a> (центромери).</br>
		<figure>
			<img src="../../static/Telomere.png">
			<figcaption>Теломери на кінцях хромосоми</figcaption>
		</figure>
		Кодуюча частина генів еукаріотів представлена послідовністю окремих змістовних ділянок – екзонів , розділених беззмістовними інтронами . Часто екзони відповідають окремим структурним доменам мультидоменних білкі. Беззмістовними інтрони є в тому сенсі, що не несуть інформації про кінцевий продукт, але в межах інтронів часто розташовані важливі регуляторні ділянки. Крім того, інтрони деяких генів можуть містити інші гени зі своїми інтронами та екзонами. При транскрипції молекула РНК синтезується суцільно (первинний продукт транскрипції – первинний транскрипт – має у своєму складі екзони та інтрони).</br>
		Отже, необхідним етапом експресії гена є процес сплайсингу – вирізання інтронів і зшивання екзонів у кінцевий транскрипт, який уже може бути використаний як матриця для білкового синтезу. При цьому сплайсинг може бути спрямований по різних шляхах – <b>альтернативний сплайсинг</b> , – що приводить до утворення різних	кінцевих продуктів – різних білків.
		<img src="../../static/splicing.png"></br>
		Загальна кількість генів у геномах вищих еукаріотів варіює при-
		близно від 20 до 30 тис. Як показано на рис. 1.10, кодуючі послідовності цих генів займають лише ~1,5 % геному. Решта припадає на міжгенну ДНК (де розташовані також регуляторні ділянки), інтрони (~30 %) і більше ніж половину геному становлять послідовності, що повторюються.</br>
		<b>Основні типи повторів, присутні в геномі вищих еукаріотів:</b>
		<li>
			 гени, представлені кількома (а іноді до 1 тис.) копіями. Часто гени, котрі повторюються, згруповані в кластери, тобто знаходяться поряд один з одним;
		</li>
		<li> 
			псевдогени – послідовності, які гомологічні певним генам, але не експресуються. До їхньої появи приводять, наприклад, порушення частини генів, що повторюються: непошкоджені гени беруть на себе функцію пошкоджених, а останні так і залишаються в геномі;
		</li>
 		<li>
 			багатократні повтори коротких послідовностей (тандемні повтори), частина яких розподілена по всьому геному, але більшість зосереджена в теломерних і центромерних зонах хромосом;
 		</li>
 		<li>
 			інтерсперсні (дисперговані) мобільні елементи, здатні до переміщення та розмноження в межах геному. Мобільні елементи займають значну частину еукаріотичного геному (від 30 до 50 %), але розподілені в геномі нерівномірно: є довгі ділянки, що на 90 % представлені мобільними елементами, і такі зони, де інтерсперсні елементи відсутні. У цілому спостерігається негативна кореляція між щільністю генів і мобільних елементів. 
 		</li></br>
		Крім клітинного ядра, ДНК є також у мітохондріях і хлоропластах,
		де являє собою автономний, невеликий порівняно з ядерним, цитоплазматичний елемент еукаріотичного геному.
	</p>
	<p>
		<h3>Структурна організація ДНК в клітинах</h3>
		Циркулярна ДНК бактеріальної хромосоми існує в клітині у вигляді комплексу з білками.
		Упаковка ДНК у клітинному ядрі має дозволяти вибіркову активацію певних ділянок у певні моменти часу. Ці альтернативні завдання вирішуються завдяки тому, що ДНК існує в клітинному ядрі у вигляді складного нуклеопротеїнового комплексу – <b>хроматину</b>. Нуклеопротеїновий комплекс, який містить одну гігантську лінійну молекулу ДНК називають <b>хромосомою</b>.
		<h4>Структура хроматину</h4>
		На першому рівні організації хроматину ДНК формує за рахунок
		взаємодії з білками елементарні утворення – <b>нуклеосоми</b>. Білковий компонент нуклеосоми (кор) складається з восьми молекул корових гістонів Н2А, Н2В, Н3 і Н4 – по дві молекули кожного типу. Октамерний комплекс гістонів має на своїй поверхні своєрідний трек позитивно заряджених амінокислотних залишків, який використовується для взаємодії з нуклеосомною ДНК довжиною 145 пар основ: ДНК утворює на поверхні октамера ~1,7 витка лівої суперспіралі.
		<img src="../../static/hromosoma.png">

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