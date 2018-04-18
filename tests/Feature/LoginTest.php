<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginTest extends TestCase
{
      
    public function testAjaxLogin()
    {
        $loginData = [
            'username' => 'karolni90@gmail.com',
            'password' => 'secret'
            ];
 
        $response = $this->json('POST', '/loginSubmit/',$loginData);

        $response->assertStatus(200); 

          
        
    }

}
