<?php
/**
 * Tests for DenoStrata
 */

use PHPUnit\Framework\TestCase;
use Denostrata\Denostrata;

class DenostrataTest extends TestCase {
    private Denostrata $instance;

    protected function setUp(): void {
        $this->instance = new Denostrata(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Denostrata::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
