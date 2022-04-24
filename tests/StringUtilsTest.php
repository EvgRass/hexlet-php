<?php

use Hexlet\Php\StringUtils as SU;

if (SU\capitalize('hello') !== 'Hello') {
	    throw new \Exception('Функция работает неверно!');
}

if (SU\capitalize('') !== '') {
	    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';
