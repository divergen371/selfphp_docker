<?php
$str = 'WINGSプロジェクト';
print mb_strstr($str, 'S', true);
print '<br/>';
print mb_strstr($str, 'S');
print mb_strstr($str, 'M', false);
