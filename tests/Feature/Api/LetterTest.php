<?php

namespace Tests\Feature\api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LetterTest extends TestCase
{

    public function test_CheckIfReturnCorrectDniLetterWithApi() {
        $data = ['letter' => 'W'];

        $response = $this->getJson(route('index', ['number' => 79291697]));
        
        $response->assertStatus(200)
            ->assertJsonFragment($data);
    }

    public function test_CheckIfReturnErrorWithApi() {
        $data = ['message' => 'The introduced data is not valid'];

        $response = $this->getJson(route('index', ['number' => "99999999999999999"]));
        
        $response->assertStatus(400)
            ->assertJsonFragment($data);
    }
}
