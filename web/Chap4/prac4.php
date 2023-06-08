<?php

$language = 'Python';

switch ($language) {
	case 'Python':
	case 'Ruby':
	case 'PHP':
		print 'インタプリタ言語';
		break;
	case 'Java':
	case 'C#':
		print 'コンパイル言語';
		break;

	default:
	print '???';
		break;
}
