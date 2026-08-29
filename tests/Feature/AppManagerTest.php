<?php

namespace Tests\Feature;

use Tests\TestCase;

class AppManagerTest extends TestCase
{
    /**
     * Test login screen loads.
     */
    public function test_login_screen_loads(): void
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
        $response->assertSee('Mobilis Admin Gate');
    }

    /**
     * Test admin login with valid passcode.
     */
    public function test_admin_can_login_with_default_passcode(): void
    {
        $response = $this->post('/admin/login', [
            'password' => 'mobilis2026',
        ]);

        $response->assertRedirect('/admin/app-manager');
        $response->assertSessionHas('mobilis_admin_auth', true);
    }

    /**
     * Test admin login with invalid passcode fails.
     */
    public function test_admin_login_fails_with_wrong_passcode(): void
    {
        $response = $this->post('/admin/login', [
            'password' => 'wrongpasscode',
        ]);

        $response->assertSessionHas('error');
        $response->assertSessionMissing('mobilis_admin_auth');
    }

    /**
     * Test unauthenticated access to app manager redirects to login.
     */
    public function test_unauthenticated_user_cannot_access_app_manager(): void
    {
        $response = $this->get('/admin/app-manager');
        $response->assertRedirect('/admin/login');
    }

    /**
     * Test authenticated access to app manager succeeds.
     */
    public function test_authenticated_user_can_access_app_manager(): void
    {
        $response = $this->withSession(['mobilis_admin_auth' => true])
            ->get('/admin/app-manager');

        $response->assertStatus(200);
        $response->assertSee('App Release');
    }

    /**
     * Test access with passcode query param succeeds.
     */
    public function test_user_can_access_with_passcode_query_param(): void
    {
        $response = $this->get('/admin/app-manager?passcode=mobilis2026');
        $response->assertStatus(200);
        $response->assertSee('App Release');
    }
}
