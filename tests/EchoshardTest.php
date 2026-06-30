<?php
/**
 * Tests for EchoShard
 */

use PHPUnit\Framework\TestCase;
use Echoshard\Echoshard;

class EchoshardTest extends TestCase {
    private Echoshard $instance;

    protected function setUp(): void {
        $this->instance = new Echoshard(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echoshard::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
