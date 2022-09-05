<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Redis;
use Tests\TestCase;

class RedisTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_set_and_get_redis()
    {
        Redis::set('name', 'test');
        $this->assertEquals(Redis::get('name'),'test');
    }

}
