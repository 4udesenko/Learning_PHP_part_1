<?php

define('ROOT', __DIR__);
include(ROOT . '/db_fns.php');

$view = empty($_GET['view']) ? 'images' : $_GET['view'];

switch ($view) {
    case('images'):
        $images = getImages();
        break;
    case('image'):
        $id = $_GET['id'];
        $image = getImage($id);
        break;
    case('form'):
        break;
}

$arr = ['images', 'image', 'form'];
if (!in_array($view, $arr)) die('Такого адреса не существует');

include(ROOT . '/layout/gallery.php');
