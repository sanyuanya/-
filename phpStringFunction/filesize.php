<?php
function getsize($size, $format = 'kb') {
    $p = 0;
    if ($format == 'kb') {
        $p = 1;
    } elseif ($format == 'mb') {
        $p = 2;
    } elseif ($format == 'gb') {
        $p = 3;
    }
    $size /= pow(1024, $p);
    return number_format($size, 3);//number_format() ����ͨ��ǧλ��������ʽ�����֡�
}
$filename = './floor.php';
$size = filesize($filename);
$size = getsize($size, 'kb'); //���е�λת��echo $size.'kb';

