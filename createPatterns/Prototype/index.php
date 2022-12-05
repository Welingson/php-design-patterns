<?php 

require_once('../autoload.php');

$buyers = [
    'Welingson',
    'Simone'
];

$bookPhp = new \Prototype\BookPhpPrototype();
$bookPython = new \Prototype\BookPythonPrototype();

$bookPhp->setTitle('Livro de PHP 8');
$bookPython->setTitle('Livro de Python');

$books = [];

foreach ($buyers as $buyerName) {
    $bookBuyer = clone $bookPhp;
    $bookBuyer->setTitularName($buyerName);

    $books[] = $bookBuyer;
}

foreach ($buyers as $buyerName) {
    $bookBuyer = clone $bookPython;
    $bookBuyer->setTitularName($buyerName);

    $books[] = $bookBuyer;
}

var_dump($books);


