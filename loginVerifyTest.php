<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

use App\Models\quoteUser;


class loginVerifyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        $response = $this->post('loginVerify',[
            'email'=>'sandeep@gmail.com',
            'password'=>123123,
        ]);

        $response->assertStatus(200);
    }
}
