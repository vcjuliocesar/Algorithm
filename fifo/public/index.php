<?php
require '../vendor/autoload.php';

$fifo = new App\Fifo();

$fifo->addElement('a');
$fifo->addElement('b');
$fifo->addElement('c');
$fifo->addElement('d');
$fifo->deleteFirstElement();

$fifo->display();

