<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFileCsvClient_IsWritable()
    {
        $this->assertFileIsWritable(Storage::path('csv/client.csv'));
    }
}
