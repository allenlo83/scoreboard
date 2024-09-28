<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    use RefreshDatabase;

    public function testGetSchedule()
    {
        $response = $this->get('/api/get-schedules');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'success',
            'code',
            'message',
            'data' => [
                '*' => ['id', 'season', 'date', 'country', 'winner', 'created_at', 'updated_at']
            ],
            'error',
        ]);
    }

    public function testGetStandings()
    {
        $response = $this->get('/api/get-schedules');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'success',
            'code',
            'message',
            'data' => [
                '*' => ['id', 'rank', 'team', 'wins', 'podiums', 'created_at', 'updated_at']
            ],
            'error',
        ]);
    }
}