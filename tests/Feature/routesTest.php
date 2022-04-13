<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Carbon;

class routesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_404_error()
    {
	$response = $this->get('404Error');
	$response->assertStatus(404);
    }

    public function test_500_error()
    {
	$response = $this->get('500Error');
	$response->assertStatus(500);
    }

    public function test_data_route_exist()
    {
	$Now = Now();
	$response = $this->get('date');
	$response->assertStatus(200);
    }

    public function test_data_correct_output()
    {
        $Now = Now();
        $response = $this->get('date');
        $content = $response->getContent();
        /*echo "Response: ".$content;
        echo "Now: ".$Now;*/
        echo strpos($content,$Now->toDateString());
        $this->assertIsInt(strpos($content,$Now->toDateString()));
    }


}
