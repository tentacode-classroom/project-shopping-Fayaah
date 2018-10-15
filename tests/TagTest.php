<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Tag;

class TagTest extends TestCase
{
    public function testGetName()
    {
        $tag = new Tag();
        $tag->setName('Mignon');

        $this->assertTrue($tag->getName() === true);
    }
}
