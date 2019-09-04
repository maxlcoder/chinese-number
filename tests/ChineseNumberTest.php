<?php


use PHPUnit\Framework\TestCase;

class ChineseNumberTest extends TestCase
{

    public function testTrans()
    {
        $input = 100;
        $chineseNumber = new Maxlcoder\ChineseNumber\ChineseNumber();
        $this->assertEquals($chineseNumber->trans($input), 'Yes');
    }
}