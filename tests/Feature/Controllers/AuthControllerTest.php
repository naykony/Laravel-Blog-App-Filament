<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_loads_successfully()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSee('ورود');
    }

    public function test_register_page_loads_successfully()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response->assertSee('ایجاد');
    }

    public function test_register_and_login_with_valid_data()
    {
        $formData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $response = $this->post('/register', $formData);

        $response->assertStatus(302);

                $formData = [
            'email' => 'test@example.com',
            'password' => 'password123',
        ];
        
        $response = $this->post('/login', $formData);

        $this->assertAuthenticated();
        $response->assertStatus(302);


    }
}
