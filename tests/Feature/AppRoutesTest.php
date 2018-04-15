<?php

namespace Tests\Feature;

use Tests\TestCase;

class callsApiTest extends TestCase
{
      
    public function testRouteLogin()
    {
        $loginData = [
            'username' => $this->user->email,
            'password' => 'secret'
            ];
 
        $response = $this->json('POST', '/login/',$loginData);

        $response->assertStatus(200);   
        
    }

}
