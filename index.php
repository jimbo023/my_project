<?php

/*
2. *Строить фотогалерею, не указывая статичные ссылки к файлам,
 а просто передавая в функцию построения адрес папки с изображениями. 
 Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.
*/

$images = scandir('./images');

function img_render($dirs)
{
    $src_img = "./images/";
    foreach ($dirs as $dir) {
        if ($dir != '.' && $dir != "..") {
            $images[] = $dir;
        }
    }
    foreach ($images as $image) {
        echo '<a target="_blank" href="' . $src_img  . $image . '"><img src="' . $src_img  . $image . '" with="100px" height="100px"> </img>';
    }
}

img_render($images);
