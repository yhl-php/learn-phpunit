<?php
/**
 * 对函数或方法的输出进行测试
 */
use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase {

    public function testExpectFooActualFoo() {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectBarActualBaz() {
        $this->expectOutputString('bar');
        print 'baz';
    }

    public function testEquality() {
        $this->assertEquals(
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 3, 4, 5, 6],
            [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 33, 4, 5, 6]
        );
    }


}