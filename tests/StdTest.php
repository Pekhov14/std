<?php

use Pekhov\Std\Json;
use Pekhov\Std\std;
use PHPUnit\Framework\TestCase;

class StdTest extends TestCase
{
    public function testJsonMethod(): void
    {
        $std = Std::json();
        $this->assertInstanceOf(Json::class, $std);
    }
}