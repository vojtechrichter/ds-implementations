<?php

declare(strict_types=1);

namespace DsImpl\SinglyLinkedList;

final class Node
{
    public function __construct(
        public ?string $value = null,
        public ?Node $nextNode = null
    ) {
    }

    public function isTail(): bool
    {
        return $this->nextNode === null;
    }
}
