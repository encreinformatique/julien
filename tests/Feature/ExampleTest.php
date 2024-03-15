<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(301);
        $response->assertLocation('/es');
    }

    public function test_the_application_returns_english(): void
    {
        $response = $this->get('/en');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_spanish(): void
    {
        $response = $this->get('/es');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_french(): void
    {
        $response = $this->get('/fr');

        $response->assertStatus(200);
    }
}
