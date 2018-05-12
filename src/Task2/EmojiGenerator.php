<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

use ArrayIterator;

class EmojiGenerator
{
    public function generate(): \Generator
    {
        $arr = ['🚀', '🚃', '🚄', '🚅', '🚇'];
        foreach ($arr as $item){
            yield $item;
        }
        // @todo
    }
}