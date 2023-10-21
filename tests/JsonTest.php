<?php

use Pekhov\Std\Json;
use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    private Json $json;

    protected function setUp(): void
    {
        $this->json = new Json();
    }

    public function testJsonEncode(): void
    {
        $data = ['key' => 'value'];
        $result = $this->json->jsonEncode($data);

        $this->assertJson($result);
    }

    public function testJsonDecode(): void
    {
        $jsonString = '{"key":"value"}';
        $decoded = $this->json->jsonDecode($jsonString, true);

        $this->assertIsArray($decoded);
        $this->assertEquals(['key' => 'value'], $decoded);
    }

    public function testJsonDecodeWithAssociative(): void
    {
        $jsonString = '{"key":"value"}';
        $decoded = $this->json->jsonDecode($jsonString, true);

        $this->assertIsArray($decoded);
        $this->assertEquals(['key' => 'value'], $decoded);
    }

    public function testJsonDecodeWithDepth(): void
    {
        $this->expectException(JsonException::class);

        $jsonString = '{"key":{"nested":"value"}}';

        // JSON is too deep for the specified depth
        $this->json->jsonDecode($jsonString, null, 1);
    }
}