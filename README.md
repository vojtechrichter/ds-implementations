# ds-implementations
Collection of common data structures implemented in PHP, offering a range of ready-to-use sorting or searching algorithms.

## Usage
This is an example on how to use a singly linked list
```php
<?php

declare(strict_types=1);

// Your path to composer autoload file may differ
require_once __DIR__ . '/vendor/autoload.php';

$sll = new \DsImpl\SinglyLinkedList\SinglyLinkedList();
$sll->insertAtEnd('foo 10');
$sll->insertAtEnd('bar 100');
// All insertions return a reference to the (possibly new) head
$head = $sll->insertAtStart('i should be first');
$sll->insertAtEnd("i should be last");
$sll->insertAtStart('i am first now!');
$sll->insertAt(1, "123");

print_r((string) $sll);

print_r('Size: ' . $sll->count() . PHP_EOL);
```
Output
```text
["i am first now!"] -> ["i should be first"] -> ["foo 10"] -> ["bar 100"] -> ["i should be last"]
Size: 5
```
