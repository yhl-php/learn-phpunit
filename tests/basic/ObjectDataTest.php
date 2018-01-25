<?php
use PHPUnit\Framework\TestCase;
require 'CsvFileIterator.php';

class ObjectDataTest extends TestCase {
    /**
     * @dataProvider additionProvider
     * 测试数据供给(csv文件)
     */
    public function testAdd($a, $b, $expected) {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider() {
        return new CsvFileIterator('data.csv');
    }



}