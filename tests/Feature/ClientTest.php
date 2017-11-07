<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientTest extends TestCase
{
    /**
     * View page with the right response code.
     *
     * @return void
     */
    public function testRouteClients_200()
    {
        $response = $this->get('/clients');
        $response->assertStatus(200);
    }

    public function testRouteClients_SeeTable()
    {
        $response = $this->get('/clients');
        $response->assertSee("Clients");
    }

}
