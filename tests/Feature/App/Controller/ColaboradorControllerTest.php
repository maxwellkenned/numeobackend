<?php

namespace Tests\Feature\App\Controller;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ColaboradorControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet()
    {
        $this->get('/api/colaboradores');
        $this->assertTrue(true);
    }
}
