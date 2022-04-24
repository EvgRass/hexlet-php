<?php

use function Hexlet\Php\StringUtils\capitalize;

if (capitalize('hello') !== 'Hello') {
	    throw new \Exception('Функция работает неверно!');
}

if (capitalize('') !== '') {
	    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';
