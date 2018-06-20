<?php

namespace Tests\Feature\App\Controller;

use Numeo\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testeLogin()
    {
        $data = [
          'username' => 'maxwell',
          'password' => 'maxwell'
        ];
        $user = $data;
        $user['password'] = bcrypt($user['password']);
//        factory(User::class)->create($user);

        $response = $this->post('api/auth/login', $user);

        $response->assertStatus(200);
        $response->assertJson([
            'username' => 'maxwell'
        ]);
    }
}
