<?php

$text = isset($_POST['text']) ? $_POST['text'] : '';

if (!$text) {
    die('error');
}

function url_title($str, $delimiter = '-', $lowercase = true, $replace = array(' con ', ' de ', ' para ', ' y ', ' en ', ' of '))
{
    if (!empty($replace)) {
        $str = str_replace((array) $replace, ' ', $str);
    }

    $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðòóôõöøùúûýýþÿŔŕÑñ';
    $b = 'aaaaaaaceeeeiiiidoooooouuuuybsaaaaaaaceeeeiiiidoooooouuuyybyRr{{';
    $str = strtr(utf8_decode($str), utf8_decode($a), $b);
    $str = utf8_encode($str);

    $str = str_replace('{', 'Ñ', $str);
    $str = str_replace('{', 'Ñ', $str);

    if ($lowercase) {
        $str = strtolower($str);
    }

    return $str;
}

$text = url_title($text, ' ', false, array());

$text = trim($text);

$text = strtoupper($text);

$text = trim($text);
$text = substr($text, 0, 23);

$id = $text;

$id = md5($id);

$path = 'mp4/' . $id . '.mp4';

if (!file_exists($path)) {
    $command = "ffmpeg -i romu.mp4 -i blank.png -filter_complex \"[0:v][1:v]overlay=10:10,drawtext=enable='between(t,5,1*60)':fontfile='arial.ttf':fontcolor=yellow:text='" . $text . "':x=(w-text_w)/2:y=300:fontsize=40\" -b 250k mp4/" . $id . ".mp4";

    shell_exec($command);
    sleep(4);
}

header('Location: /romu_generator/?id=' . $id);
