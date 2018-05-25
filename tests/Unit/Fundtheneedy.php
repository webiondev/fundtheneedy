<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class Fundtheneedy extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->call('GET', '/');
        

    $this->assertEquals(200, $response->status());
    }

     public function testRegister(){

        $response = $this->call('GET', '/register');
         $this->assertEquals(200, $response->status());
            }
       
       public function testLoginSuccess(){
     Session::start();
    $response = $this->call('POST', 'http://localhost/login', [
        'email' => 'sokhter@yahoo.com',
        'password' => '123456',
        '_token' => csrf_token()
    ]);

    
     $response->assertStatus(302);
    $response->assertRedirect('http://localhost/login');

        
}
    public function testLoginFail(){
     Session::start();
    $response = $this->call('POST', '/login', [
        'email' => 'sokhter@yahoo.com',
        'password' => '1234d56',
        '_token' => csrf_token()
    ]);

    
     $response->assertStatus(302);
    $response->assertRedirect('/login');

        
}

 public function testProfile()
    {
        $response = $this->withSession(['email' => 'sokhter@yahoo.com'])
             ->call('GET','/profile_me');
        

    $this->assertEquals(302, $response->status());
     $response->assertRedirect('http://localhost/login');
    }

}