<?php
use PHPUnit\Framework\TestCase;
class DataTest extends TestCase {
    /**
     * @dataProvider additionProvider
     * 测试数据供给
     */
    public function testAdd($a, $b, $expected) {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider() {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }



}