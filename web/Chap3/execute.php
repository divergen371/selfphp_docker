<?php
$result = `uname -a`;
// print mb_convert_encoding($result, 'UTF-8', 'SJIS');
print $result;
