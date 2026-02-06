<?php
/**
 * Tests for apiEclipse
 */

use PHPUnit\Framework\TestCase;
use Apieclipse\Apieclipse;

class ApieclipseTest extends TestCase {
    private Apieclipse $instance;

    protected function setUp(): void {
        $this->instance = new Apieclipse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apieclipse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
