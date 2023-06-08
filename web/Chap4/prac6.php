<?php

$language = 'PHP';

print match ($language) {
	'Python', 'PHP', 'Ruby' => 'インタプリタ言語',
	'C#', 'Java' => 'コンパイル言語',
};
