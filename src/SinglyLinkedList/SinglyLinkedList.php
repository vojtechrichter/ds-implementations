<?php

declare(strict_types=1);

namespace DsImpl\SinglyLinkedList;

final class SinglyLinkedList implements \Stringable, \Countable
{
    public ?Node $head = null;

    public function __construct(
    ) {
    }

    public function insertAtEnd(string $value): Node
    {
        if ($this->head === null) {
            $this->head = new Node($value);
            return $this->head;
        }

        $node = $this->head;
        while (!$node->isTail()) {
            $node = $node->nextNode;
        }

        $node->nextNode = new Node($value);

        return $this->head;
    }

    public function insertAtStart(string $value): Node
    {
        if ($this->head === null) {
            $this->head = new Node($value);

            return $this->head;
        }

        $originalHead = $this->head;
        $this->head = new Node($value, $originalHead);

        return $this->head;
    }

    /**
     * @param int $index Index of a node starting from 0 after which the new node should be inserted
     * @param string $value
     * @return Node
     */
    public function insertAt(int $index, string $value): Node
    {
        $indexCounter = 0;
        $node = $this->head;
        while (!$node->isTail()) {
            if ($indexCounter === $index) {
                $node->nextNode = new Node($value, $node->nextNode);

                break;
            }

            $node = $node->nextNode;
            $indexCounter++;
        }

        return $this->head;
    }

    public function deleteHead(): Node
    {

    }

    public function deleteTail(): Node
    {

    }

    public function __toString(): string
    {
        $result = '';
        $n = $this->head;
        while (!$n->isTail()) {
            $result .= sprintf('["%s"] -> ', $n->value);
            $n = $n->nextNode;
        }
        $result .= sprintf('["%s"]', $n->value);

        $result .= PHP_EOL;

        return $result;
    }

    public function count(): int
    {
        if ($this->head === null) {
            return 0;
        }

        $increment = 0;
        $node = $this->head;
        while (!$node->isTail()) {
            $node = $node->nextNode;
            $increment++;
        }

        return $increment + 1;
    }
}
