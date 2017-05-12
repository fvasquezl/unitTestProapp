<?php

namespace Tests\Feature;


use App\User;
use FeatureTestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends FeatureTestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_basic_example()
    {
        $user = factory(User::class)->create([
            'name' => 'Faustino Vasquez'
        ]);

        $this->actingAs($user,'api');

        $response = $this->get('api/user')
        ->assertSee('Faustino Vasquez');

        $response->assertStatus(200);
    }
}
