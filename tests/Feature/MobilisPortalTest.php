<?php

namespace Tests\Feature;

use Tests\TestCase;

class MobilisPortalTest extends TestCase
{
    /**
     * Test that the marketing homepage loads successfully with Mobilis branding and unified app download CTAs in English.
     */
    public function test_homepage_loads_successfully_as_marketing_and_download_hub(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('MOBILIS');
        $response->assertSee('Rent a car and');
        $response->assertSee('Mobilis App');
        $response->assertSee('Toyota Vios');
        $response->assertSee('Download Mobilis App (APK)');
    }

    /**
     * Test legal and policy routes.
     */
    public function test_legal_and_policy_pages_load_successfully(): void
    {
        $terms = $this->get('/terms');
        $terms->assertStatus(200);
        $terms->assertSee('Terms of Service');
        $terms->assertSee('Acceptance of Terms');

        $privacy = $this->get('/privacy');
        $privacy->assertStatus(200);
        $privacy->assertSee('Privacy Policy');
        $privacy->assertSee('Republic Act No. 10173');

        $insurance = $this->get('/security-insurance');
        $insurance->assertStatus(200);
        $insurance->assertSee('Security & Insurance Policy');
        $insurance->assertSee('Comprehensive Commercial Rental Insurance');
    }

    /**
     * Test direct APK download route for the unified Mobilis app on mobile devices.
     */
    public function test_download_endpoint_returns_unified_apk_payload_on_mobile(): void
    {
        $download = $this->withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Linux; Android 14; Pixel 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36',
        ])->get('/download');

        $download->assertStatus(200);
        $download->assertHeader('Content-Disposition', 'attachment; filename=Mobilis-App-v2.5.0.apk');
        $download->assertHeader('Content-Type', 'application/vnd.android.package-archive');
    }

    /**
     * Test that desktop users are redirected to homepage with QR prompt.
     */
    public function test_desktop_users_are_redirected_to_homepage_on_download(): void
    {
        $response = $this->withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
        ])->get('/download');

        $response->assertStatus(302);
        $response->assertRedirect('/?desktop_restricted=1');
    }
}
