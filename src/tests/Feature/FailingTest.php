<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FailingTest extends TestCase
{
    /**
     * @test
     */
    public function わざと失敗()
    {
        // fail on purpose
        $this->assertTrue(false);
    }
}
