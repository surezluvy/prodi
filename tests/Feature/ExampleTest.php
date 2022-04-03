<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Menu;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_admin_login_and_visit_admin_dashboard()
    {
        $user = 'admin';
        User::factory()->create([
            'email'    => 'admin@admin.com',
            'password' => bcrypt('secret'),
        ]);

        $this->visit('/'.$user);
        $this->seePageIs($user.'/login');

        $this->submitForm('login', [
            'email' => 'admin@admin.com',
            'password' => 'secret'
        ]);

        $this->seePageIs($user);
    }

}
