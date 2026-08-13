<?php
/**
 * Tests for NexusStar
 */

use PHPUnit\Framework\TestCase;
use Nexusstar\Nexusstar;

class NexusstarTest extends TestCase {
    private Nexusstar $instance;

    protected function setUp(): void {
        $this->instance = new Nexusstar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nexusstar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
