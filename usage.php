<?php

require __DIR__ . '/vendor/autoload.php';

$sll = new \DsImpl\SinglyLinkedList\SinglyLinkedList();

$sll->insertAtEnd('foo 10');
$sll->insertAtEnd('bar 100');
$sll->insertAtStart('i should be first');
$sll->insertAtEnd("i should be last");
$sll->insertAtStart('i am first now!');
$sll->insertAt(1, "123");

print_r((string) $sll);

print_r('Size: ' . $sll->count() . PHP_EOL);
