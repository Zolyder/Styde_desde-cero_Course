<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeTest extends TestCase
{
    /** @test*/
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/dulio/silence')
            ->assertStatus(200)
            ->assertSee('Bienvenido Dulio, tu apodo es silence');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/dulio')
            ->assertStatus(200)
            ->assertSee('Bienvenido Dulio');
    }
}
