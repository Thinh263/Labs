<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testTheApplicationReturnsASuccessfulResponse(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('TV');
    }

    public function testProductsPageListsAllProducts(): void
    {
        $response = $this->get(route('product.index'));

        $response->assertOk();
        $response->assertSee('TV');
        $response->assertSee('iPhone');
        $response->assertSee('Chromecast');
        $response->assertSee('Glasses');
    }

    public function testProductPageShowsTheRequestedProduct(): void
    {
        $response = $this->get(route('product.show', ['id' => 2]));

        $response->assertOk();
        $response->assertSee('iPhone');
        $response->assertSee('Best iPhone');
    }

    public function testMissingProductReturnsNotFound(): void
    {
        $this->get(route('product.show', ['id' => 99]))
            ->assertNotFound();

        $this->get('/products/not-a-number')
            ->assertNotFound();
    }
}
