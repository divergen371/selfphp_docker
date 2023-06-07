<?php

$drink = 'ビール';

switch ($drink) {
	case '日本酒':
	case 'ビール':
	case 'ワイン':
		print '醸造酒です。';
		break;
	case 'ウィスキー':
	case 'ブランデー':
		print '蒸留酒です。';
		break;
}