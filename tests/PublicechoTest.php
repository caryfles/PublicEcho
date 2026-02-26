<?php
/**
 * Tests for PublicEcho
 */

use PHPUnit\Framework\TestCase;
use Publicecho\Publicecho;

class PublicechoTest extends TestCase {
    private Publicecho $instance;

    protected function setUp(): void {
        $this->instance = new Publicecho(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Publicecho::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
