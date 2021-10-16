<?php
require_once __DIR__ . '/../config/twig.php';




$products = ['guitare', 'bass', 'ukulele', 'cithare', 'lyre'];
echo $twig->render('products.html.twig',['products'=>$products]);


