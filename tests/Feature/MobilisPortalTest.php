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
     * Test direct APK download route for the unified Mobilis app.
     */
    public function test_download_endpoint_returns_unified_apk_payload(): void
    {
        $download = $this->get('/download');
        $download->assertStatus(200);
        $download->assertHeader('Content-Disposition', 'attachment; filename="Mobilis-App-v2.5.0.apk"');
        $download->assertHeader('Content-Type', 'application/vnd.android.package-archive');
    }
}
