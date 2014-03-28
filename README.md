Компонент solo-formrestore
================

Компонент фреймворка Solo, предоставляющий возможность восстановить состояние HTML-формы из сохраненных данных.

Случается, что после проверки данных формы на сервере, некоторые поля оказываются заполнены неправильно (невалидны),
и требуется показать пользователю эту же форму заполненную ранее введенными значениями.

Класс FormRestore совместно с плагином Smarty позволяют решить эту задачу.

Требования
==========
jQuery

Установка
=========

Установка через composer:

	"require": {
		"solo/formrestore": "dev-master"
	}

Пример
======

Html-код:

	<html>
	<script language="javascript" type="text/javascript" src="jquery.js" />

	<?php
		echo FormRestore::restore();
	?>

	<form id='my_form_id'>
		<input type='text' name='age' />
		<input type="checkbox" name="value" value="42"/>
		<input type="submit" value="check!"/>
	</form>
	</html>

Серверный код:

	<?php
		$age = $_POST['age'];
		if (!is_int($age))
		{
			FormRestore::saveData("my_form_id");
			// redirect to previous page here!
		}
	?>