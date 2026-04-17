<?php
/**
 * Tests for DecredVote
 */

use PHPUnit\Framework\TestCase;
use Decredvote\Decredvote;

class DecredvoteTest extends TestCase {
    private Decredvote $instance;

    protected function setUp(): void {
        $this->instance = new Decredvote(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Decredvote::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
