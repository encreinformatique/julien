<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ManifestTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_webmanifest_returns_a_successful_response(): void
    {
        $response = $this->get('/site.webmanifest');

        $response->assertStatus(200);
        $response->assertJsonCount(4);
        $response->assertJson(fn (AssertableJson $json) =>
        $json
            ->where('display', 'standalone')
            ->whereType('short_name', 'string')
            ->whereType('background_color', 'string')
            ->whereType('theme_color', 'string')
        );
    }
}
