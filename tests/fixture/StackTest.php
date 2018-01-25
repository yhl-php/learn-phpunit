<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase {

    protected $stack;

    /**
     * 测试类的每个测试方法都会运行一次
     */
    protected function setUp() {
        print "start\n";
        $this->stack = [];
    }

    /**
     * 每个测试方法运行之后都会执行该function
     */
    protected function tearDown() {
        print "end\n";
    }

    /**
     * 测试用例类的第一个测试运行之前调用, 一般用于基境共享，如数据库连接
     */
    public static function setUpBeforeClass() {
        print "first -----------\n";
    }

    /**
     * 测试用例类的最后一个测试运行之后调用，一般用于基境共享，如数据库连接
     */
    public static function tearDownAfterClass() {
        print "last -----------\n";
    }

    public function testEmpty() {
        $this->assertTrue(empty($this->stack));
    }

    public function testPush() {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', $this->stack[count($this->stack)-1]);
        $this->assertFalse(empty($this->stack));
    }

    public function testPop() {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', array_pop($this->stack));
        $this->assertTrue(empty($this->stack));
    }



}