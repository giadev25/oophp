<?php

// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Komik.php';
// require 'Produk/Game.php';
// require 'Produk/CetakInfoProduk.php';

function autoload($class)
{
}
spl_autoload_register(function ($class) {
    require __DIR__ .  '/Produk/' . $class . '.php';
});
