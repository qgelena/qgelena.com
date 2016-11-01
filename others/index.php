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
include('../include/header.php');
?>
<div class="page_content">
	<aside class="inline-blk aside-size">
	</aside>
	<section id="text" class="inline-blk">
		<li>
			<a href="http://eax.me/vim-commands/">Шпаргалка по роботі з VIM | Блог | Записки программиста </a>
			<div class="text_code">
				<table>
						Файл настройки: ~/.vimrc</br>
						Можно редактировать файлы через сеть, например :e < scp|ftp|ftps>://user@host/path/to/the/file.txt :Ex или :e ./ - файловый менеджер
					<tr>
						<td><b>Основы</b></td>
					</tr>
					<tr>
						<td><b>Перемещение</b></td>
					</tr>
					<tr>
						<td>hjkl</td>
						<td>перемещение по символам в разные стороны</td>
					</tr>
					<tr>
						<td>w,W</td>
						<td>перемещение в начало следующего слова</td>
					</tr>
					<tr>
						<td>e,E</td>
						<td>перемещение в конец следующего слова</td>
					</tr>
					<tr>
						<td>b,B</td>
						<td>перемещение в начало предыдущего слова</td>
					</tr>
					<tr>
						<td>0 ^ $</td>
						<td>перемещение в начало строки, первый непробельный символ, конец строки</td>
					</tr>
					<tr>
						<td>CTR+d, CTR+u</td>
						<td>Вверх/вниз на N строчек, где N обычно полэкрана</td>
					</tr>
					<tr>
						<td>:21< Enter></td>
						<td>перейти к 21 строке</td>
					</tr>
					<tr>
						<td>i</td>
						<td>режим вставки</br></td>
					</tr>
					<tr>
						<td>I</td>
						<td>добавление в начало строки</td>
					</tr>
					<tr>
						<td>a</td>
						<td>режим добавления</td>
					</tr>
					<tr>
						<td>A</td>
						<td>добавление в конец строки</td>
					</tr>
					<tr>
						<td>o</td>
						<td>добавить строку сразу за текущей</td>
					</tr>
					<tr>
						<td>O</td>
						<td>добавить строку перед текущей</td>
					</tr>
					<tr>
						<td style="width: 7%">R</td>
						<td>писать поверх имеющегося текста</td>
					</tr>
					<tr>
						<td>u, :u[ndo]</td>
						<td>отмена предыдущего действия (undo)</td>
					</tr>
					<tr>
						<td>CTR-R, :red[o]</td>
						<td>отмена отмены предыдущего действия (redo)</td>
					</tr>
					<tr>
						<td>dd</td>
						<td>вырезать (удалить) строку</td>
					</tr>
					<tr>
						<td>cc</td>
						<td>удалить и начать редактирование</td>
					</tr>
					<tr>
						<td>yy</td>
						<td>копировать строку</td>
					</tr>
					<tr>
						<td>p</td>
						<td>вставить из буфера обмена</td>
					</tr>
					<tr>
						<td>< n>d</td>
						<td>удалить n+1 строку</td>
					</tr>
					<tr>
						<td>< n>y</td>
						<td>скопировать n+1 строку</td>
					</tr>
					<tr>
						<td>ESC</td>
						<tr>перейти в режим просмотра</tr>
					</tr>
					<tr>
						<td>DEL</td>
						<td>удалить следующий символ</td>
					</tr>
					<tr>
						<td>:< n></td>
						<td>перейти на строку #n</td>
					</tr>
					<tr>
						<td>%</td>
						<td>перейти к парной скобке</td>
					</tr>
					<tr>
						<td>:e **/filename.c</td>
						<td>редактировать файл (с поиском по имени)</td>
					</tr>
					<tr>
						<td>:w [fname]</td>               
						<td>записать изменения</td>
					</tr>
					<tr>
						<td>:wa </td>
						<td>сохранить изменения во всех файлах</td>
					</tr>
					<tr>
						<td>:q</td>
						<td>выйти из редактора</td>
					</tr>
					<tr>
						<td>:q!</td>
						<td>выйти из редактора, не сохраняя изменения</td>
					</tr>
					<tr>
						<td>:color < name></td>
						<td>выбор цветовой схемы. цветвые схемы:/usr/local/share/vim/vim72/colors/*.vim</td>
					</tr>
					<tr>
						<td>:pwd</td>
						<td>текущий каталог</td>
					</tr>
					<tr>
						<td>:cd [path]</td>
						<td>перейти в другой каталог</td>
					</tr>
					<tr>
						<td>:!команда</td>
						<td>выполнить команду - man, git, и так далее, стрелочками веерх и вниз можно автодополнять, команды и искать по истории</td>
					</tr>
					<tr>
						<td>CTR+p или CTR+n</td>
						<td>автоматическое дополнение текста (в режиме редактирования)</td>
					</tr>
					<tr>
						<td>CTR+r,=,< expr></td>
						<td>вставить выражение, например 5*2 - 3 (в режиме редактирования)</td>
					</tr>
					<tr>
						<td>CTR+y, CTR+e</td>
						<td>Перемотка вверх/вниз без движения курсора</td>
					</tr>
					<tr>
						<td><b>Подсветка синтаксиса</b></td>
					</tr>
					<tr>
						<td>:syntax on</td>
						<td>включить подсветку</td>
					</tr>
					<tr>
						<td>:syntax off</td>
						<td>выключить подсветку (по умолчанию)</td>
					</tr>
					<tr>
						<td>Перенос строк</td>
					</tr>
					<tr>
						<td>:set wrap</br></td>
						<td>разрешить word wrap (по умолчанию)</td>
					</tr>
					<tr>
						<td>:set nowrap</td>
						<td>запретить word wrap</td>
					</tr>
					<tr>
						<td>Печать</td>
					</tr>
					<tr>
						<td>:ha[rdcopy]</td>
						<td>распечатать документ</td>
					</tr>
					<tr>
						<td>:set printoptions=duplex:off</td>
						<td>отключить двустороннюю печать</td>
					</tr>
					<tr>
						<td><b>Сворачивание</b></td>
					</tr>
					<tr>
						<td>zc</td>
						<td>свернуть блок</td>
					</tr>
					<tr>
						<td>zo</td>
						<td>развернуть блок</td>
					</tr>
					<tr>
						<td>zM</td>
						<td>закрыть все блоки</td>
					</tr>
					<tr>
						<td>zR</td>
						<td>открыть все блоки</td>
					</tr>
					<tr>
						<td>za</td>
						<td>инвертирование<</td>
					</tr>
					<tr>
						<td>zf</td>
						<td>см :set foldmethod=manual</td>
					</tr>
					<tr>
						<td>:set foldenable</td>
						<td>включить свoрачивание</td>
					</tr>
					<tr>
						<td>:set foldmethod=syntax</td>
						<td>сворачивание на основе синтаксиса</td>
					</tr>
					<tr>
						<td>:set foldmethod=indent</td>
						<td>сворачивание на основе отступов</td>
					</tr>
					<tr>
						<td>:set foldmethod=manual</td>
						<td>выделяем участок с помощью v и говорим zf</td>
					</tr>
					<tr>
						<td>:set foldmethod=marker</td>
						<td>сворачивание на основе маркеров в тексте</td>
					</tr>
					<tr>
						<td>:set foldmarker=bigin,end</td>
						<td>задаем маркеры начала и конца блока</td>
					</tr>
					<tr>
						<td><b>Маркеры</b></td>
					</tr>
						<tr>
						<td>ma</td>
						<td>установить локальный маркер a</td>
					</tr>
						<tr>
						<td>mB</td>
						<td>установить глобальный маркер B</td>
					</tr>
						<tr>
						<td>`c</td>
						<td>перейти к локальному маркеру c</td>
					</tr>
						<tr>
						<td>`0</td>
						<td>вернуться на позицию, на которой закончили работу при закрытии vim</td>
					</tr>
						<tr>
						<td>:marks</td>
						<td>просмотр маркеров</td>
					</tr>
					<tr>
						<td>set viminfo='1000,f1</td>
						<td>маркеры пишутся в ~/.viminfo, восстанавливаясь при следующем запуске vim. маркер " хранит последнюю позицию курсора в файл</td>
					</tr>
					<tr>
						<td><b>Сессии</b></td>
					</tr>
					<tr>
						<td>mksession file.session</td>
						<td>сохранить текущую сессию</td>
					</tr>
					<tr>
						<td>source file.session</td>
						<td>восстановить ранее сохраненную сессию</td>
					</tr>
					<tr>
						<td><b>Макросы</b></td>
					</tr>
					<tr>
						<td>qa</td>
						<td>в режиме записи макроса: закончить запись</td>
					</tr>
					<tr>
						<td>q</td>
						<td>в режиме записи макроса: закончить запись</td>
					</tr>
					<tr>
						<td>@a</td>
						<td>выполнить макрос с именем a</td>
					</tr>
					<tr>
						<td>@@</td>
						<td>повторить последний макрос</td>
					</tr>
					<tr>
						<td><b>Регистры</b></td>
					</tr>
					<tr>
						<td>"ayy</td>
						<td>скопировать строку в регистр a</td>
					</tr>
					<tr>
						<td>"bdd</td>
						<td>вырезать строку и поместить в регистр b</td>
					</tr>
					<tr>
						<td>"С2d</td>
						<td>вырезать три строки и дописать в конец регистра C</td>
					</tr>
					<tr>
						<td>:reg [name1][name2][...]</td>
						<td>просмотреть содержимое регистров</td>
					</tr>
					<tr>
						<td><b>Выделение</b></td>
					</tr>
					<tr>
						<td>v + hjkl</td>
						<td>выделение текста</td>
					</tr>
					<tr>
						<td>SHIFT + v</td>
						<td>выделить строку</td>
					</tr>
					<tr>
						<td>CTR + v/td>
						<td>выделение прямоугольника<</td>
					</tr>
					<tr>
						<td>p</td>
						<td>вставить</td>
					</tr>
					<tr>
						<td>y</td>
						<td>копировать</td>
					</tr>
					<tr>
						<td>d</td>
						<td>удалить</td>
					</tr>
					<tr>
						<td>gu</td>
						<td>к нижнему регистру</td>
					</tr>
					<tr>
						<td>gU</td>
						<td>к верхнему регистру</td>
					</tr>
					<tr>
						<td><b>Отступы</b></td>
					</tr>
					<tr>
						<td>[#]></td>
						<td>сдвинуть выделенное вправо</td>
					</tr>
					<tr>
						<td>[#]<</td>
						<td>сдвинуть выделенное влево</td>
					</tr>
					<tr>
						<td>[#]>></td>
						<td>сдвинуть строку вправо</td>
					</tr>
					<tr>
						<td>[#]<<</td>
						<td>сдвинуть строку влево</td>
					</tr>
					<tr>
						<td>set tabstop=#</td>
						<td>для табуляции используется # пробелов</td>
					</tr>
					<tr>
						<td>set shiftwidth=#</td>
						<td>в командах отступа используется # пробелов</td>
					</tr>
					<tr>
						<td>set [no]expandtab</td>
						<td>заменять ли табуляцию на соответствующее число пробелов</td>
					</tr>
					<tr>
						<td><b>Поиск и замена в файле</b></td>
					</tr>
					<tr>
						<td>/Выражение</td>
						<td>поиск выражения в файле</td>
					</tr>
					<tr>
						<td>\cВыражение</td>
						<td>поиск без учета регистра</td>
					</tr>
					<tr>
						<td>n</td>
						<td>следующее совпадение</td>
					</tr>
					<tr>
						<td>N</td>
						<td>предыдущее совпадение</td>
					</tr>
					<tr>
						<td>:%s/foo/bar/gi</td>
						<td>замена строк, см http://eax.me/regular-expr/</td>
					</tr>
					<tr>
						<td><b>Поиск по всему проекту</b></td>
					</tr>
					<tr>
						<td>:vimgrep /EXPR/ **/*.c</td>
						<td>поиск по регулярному выражению</td>
					</tr>
					<tr>
						<td>:copen</td>
						<td>показать все найденные места</td>
					</tr>
					<tr>
						<td>:close</td>
						<td>скрыть все найденные мест</td>
					</tr>
					<tr>
						<td>:cn</td>
						<td>переход к следующему результату</td>
					</tr>
					<tr>
						<td>:cp</td>
						<td>переход к предыдущему результату</td>
					</tr>
					<tr>
						<td><b>Нумерация строк</b></td>
					</tr>
					<tr>
						<td>:set number</td>
						<td>включить нумерацию строк</td>
					</tr>
					<tr>
						<td>:set nonumber</td>
						<td> отключить нумерацию строк</td>
					</tr>
					<tr>
						<td><b>Работа с вкладками (a.k.a табами)</b></td>
					</tr>
					<tr>
						<td>:tabnew [fname]</td>
						<td>создать таб</td>
					</tr>
					<tr>
						<td>:tabs</td>
						<td>вывести список табов</td>
					</tr>
					<tr>
						<td>:tabn</td>
						<td>следующий таб</td>
					</tr>
					<tr>
						<td>:tabp</td>
						<td>предыдущий таб</td>
					</tr>
					<tr>
						<td>< n>gt</td>
						<td>перейти на таб #n</td>
					</tr>
					<tr>
						<td>gt</td>
						<td>следующий таб</td>
					</tr>
					<tr>
						<td>gT</td>
						<td>предыдущий таб</td>
					</tr>
					<tr>
						<td>:tabm +1</td>
						<td>переместить таб вперед на одну позицию</td>
					</tr>
					<tr>
						<td>:tabm -1</td>
						<td>переместить таб назад на одну позицию</td>
					</tr>
					<tr>
						<td>:tabm 2</td>
						<td>переместить таб на заданную позицию (нумерация начинается с нуля)</td>
					</tr>
					<tr>
						<td><b>Работа с окнами</b></td>
					</tr>
					<tr>
						<td>:split</td>
						<td>горизонтальное разбиение</td>
					</tr>
					<tr>
						<td>:vsplit</td>
						<td>вертикальное разбиение</td>
					</tr>
					<tr>
						<td>Ctr+W, затем с</td>
						<td>закрыть окно</td>
					</tr>
					<tr>
						<td>+-</td>
						<td>изменение высоты текущего окна</td>
					</tr>
					<tr>
						<td> < ></td>
						<td>изменение ширины текущего окна</td>
					</tr>
					<tr>
						<td>=</td>
						<td>установить равный размер окон</td>
					</tr>
					<tr>
						<td>hjkl или стрелочки</td>
						<td>перемещение между окнами</td>
					</tr>
					<tr>
						<td><b>Проверка орфографии</b></td>
					</tr>
					<tr>
						<td>mkdir -p ~/.vim/spell</td>
					</tr>
					<tr>
						<td> cd ~/.vim/spell</td>
					</tr>
					<tr>
						<td>wget http://ftp.vim.org/vim/runtime/spell/ru.koi8-r.sug</td>
					</tr>
					<tr>
						<td>wget http://ftp.vim.org/vim/runtime/spell/ru.koi8-r.spl</td>
					</tr>
					<tr>
						<td>wget http://ftp.vim.org/vim/runtime/spell/en.ascii.sug</td>
					</tr>
					<tr>
						<td>wget http://ftp.vim.org/vim/runtime/spell/en.ascii.spl</td>
					</tr>
					<tr>
						<td>:set spell spelllang=ru,en</td>
						<td>включить проверку орфографии</td>
					</tr>
					<tr>
						<td>:set nospell</td>
						<td> выключить проверку орфографии</td>
					</tr>
					<tr>
						<td>z=</td>
						<td>замена слова на альтернативу из списка</td>
					</tr>
					<tr>
						<td>zg</td>
						<td>good word</td>
					</tr>
					<tr>
						<td>zw</td>
						<td>wrong word</td>
					</tr>
					<tr>
						<td>zw</td>
						<td>wrong word</td>
					</tr>
					<tr>
						<td>zG</td>
						<td>ignore word</td>
					</tr>
					<tr>
						<td>[s</td>
						<td>Предыдущее слово с ошибкой</td>
					</tr>
					<tr>
						<td>]s</td>
						<td>следующее слово с ошибкой</td>
					</tr>
					<tr>
						<td><b>Работа с кодировкой</b></td>
						<td></td>
					</tr>
					<tr>
						<td>e ++enc=<имя кодировки></td>
						<td>Редактирование файла в ??? кодировке</td>
					</tr>
					<tr>
						<td>w ++enc=<имя кодировки></td>
						<td>Сохранить файл в новой кодировке</td>
					</tr>
					<tr>
						<td>set fileencodings=utf-8,koi8-r</td>
						<td>Список автоматически определяемых кодировок в порядке убывания приоритета</td>
					</tr>
					<tr>
						<td><b>Другое</b></td>
						<td></td>
					</tr>
					<tr>
						<td>:set list</td>
						<td>Отображать табуляцию и переводы строк</td>
					</tr>
					<tr>
						<td>q:</td>
						<td></td>
					</tr>
					<tr>
						<td>.</td>
						<td>Повторение последней команды</td>
					</tr>
				</table>	
			</div>
		</li>
		<li>
			<a href="http://eax.me/git-commands/">Шпаргалка по роботі з git | Блог | Записки программиста</a>
		</li>
		<li>
			<a href="https://stepik.org/course/%D0%92%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5-%D0%B2-Linux-73">Курс "Введение в Linux", stepik.org</a>
		</li>
		<li>
			<a href="http://askubuntu.com/">askUbuntu</a>
		</li>
		<li>
			<a href="https://ru.wikipedia.org/wiki/HTTP">HTTP.wiki</a>
		</li>
		<li>
			<a href="https://ru.wikipedia.org/wiki/URI">URI.wiki</a>
		</li>
		<li>
			<a href="https://uk.wikipedia.org/wiki/%D0%9A%D1%83%D0%BA%D0%B8">Куки</a>
		</li>
	</section>
<?php
include('../include/contacts.php');
?>
</div>	
<?php 
include('../include/footer.php');
?>			
</body>
</html>