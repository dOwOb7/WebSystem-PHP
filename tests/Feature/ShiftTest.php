<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Shift;

class ShiftTest extends TestCase
{
    use RefreshDatabase;

    public function test_shift_creation()
    {
        $response = $this->post('/shifts', [
            'shift_date' => '2025-01-01',
            'start_time' => '09:00',
            'end_time' => '17:00'
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('shifts', [
            'shift_date' => '2025-01-01',
            'start_time' => '09:00'
        ]);
    }
}
