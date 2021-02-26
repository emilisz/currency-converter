<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A user can reach / route.
     *
     * @return void
     */
    public function testUserCanReachRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * The main welcome page is returned.
     *
     * @return void
     */
    public function testWelcomPageIsReturned()
    {
        $response = $this->get('/');
        $response->assertViewIs('welcome');
    }

    /**
     * The main welcome page is returned.
     *
     * @return void
     */
    public function testWelcomPageHasConverter()
    {
        $view = $this->view('welcome');
        $view->assertSee('converter');
    }


    
}
