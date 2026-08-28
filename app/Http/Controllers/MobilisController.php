<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MobilisController extends Controller
{
    /**
     * Show the Mobilis marketing landing page and app download hub.
     * 100% English, Hourly & Daily rates, Single unified Mobilis App.
     */
    public function index(): View
    {
        $fleet = [
            [
                'id' => 'sedan-1',
                'name' => 'Toyota Vios 2025 (Uno)',
                'plate' => 'IAG 1593',
                'color' => 'Blue',
                'category' => 'Sedan',
                'badge' => 'Most Popular',
                'seats' => '4-5 Seats',
                'transmission' => 'Automatic',
                'fuel' => 'Unleaded',
                'hourly_rate' => 180,
                'daily_rate' => 1800,
                'image' => '/images/cars/toyota-vios-2025-uno-1.jpg',
                'images' => [
                    '/images/cars/toyota-vios-2025-uno-1.jpg',
                    'https://images.unsplash.com/photo-1619682817481-e994891cd1f5?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1590362891991-f776e747a588?auto=format&fit=crop&w=1000&q=80',
                ],
                'rating' => 4.95,
                'trips' => 342,
                'features' => ['Plate: IAG 1593', 'Color: Blue', 'Apple CarPlay / Android Auto', 'Keyless Entry', 'Bluetooth Audio', 'Comprehensive Insurance'],
            ],
            [
                'id' => 'sedan-2',
                'name' => 'Honda Civic RS Turbo',
                'plate' => 'NBD 8821',
                'color' => 'Ignite Red / White',
                'category' => 'Sedan',
                'badge' => 'Sporty & Fast',
                'seats' => '5 Seats',
                'transmission' => 'Automatic',
                'fuel' => 'Gasoline',
                'hourly_rate' => 280,
                'daily_rate' => 2800,
                'image' => 'https://images.unsplash.com/photo-1590362891991-f776e747a588?auto=format&fit=crop&w=1000&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1590362891991-f776e747a588?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1617788138017-80ad40651399?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1000&q=80',
                ],
                'rating' => 4.95,
                'trips' => 210,
                'features' => ['Apple CarPlay / Android Auto', 'Leather Seats', 'Turbocharged', 'Honda Sensing'],
            ],
            [
                'id' => 'suv-1',
                'name' => 'Toyota Fortuner 4x2 GR-S',
                'plate' => 'NCB 4109',
                'color' => 'Attitude Black',
                'category' => 'SUV',
                'badge' => 'Best for Long Trips',
                'seats' => '7 Seats',
                'transmission' => 'Automatic',
                'fuel' => 'Diesel',
                'hourly_rate' => 380,
                'daily_rate' => 3800,
                'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=1000&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1000&q=80',
                ],
                'rating' => 4.92,
                'trips' => 488,
                'features' => ['7-Seater', 'Heavy Duty Suspension', 'Spacious Cargo', '360 Camera'],
            ],
            [
                'id' => 'suv-2',
                'name' => 'Ford Everest Titanium 4x4',
                'plate' => 'NDB 6245',
                'color' => 'Meteor Grey',
                'category' => 'SUV',
                'badge' => 'Premium SUV',
                'seats' => '7 Seats',
                'transmission' => 'Automatic',
                'fuel' => 'Diesel',
                'hourly_rate' => 420,
                'daily_rate' => 4200,
                'image' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1000&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&w=1000&q=80',
                ],
                'rating' => 4.96,
                'trips' => 195,
                'features' => ['Panoramic Sunroof', 'Blind Spot Detection', 'Adaptive Cruise', 'Leather Interior'],
            ],
            [
                'id' => 'van-1',
                'name' => 'Toyota HiAce Super Grandia',
                'plate' => 'NFG 9032',
                'color' => 'Luxury Pearl White',
                'category' => 'Van',
                'badge' => 'VIP Group Travel',
                'seats' => '10 Seats',
                'transmission' => 'Automatic',
                'fuel' => 'Diesel',
                'hourly_rate' => 480,
                'daily_rate' => 4800,
                'image' => 'https://images.unsplash.com/photo-1570125909232-eb263c188f7e?auto=format&fit=crop&w=1000&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1570125909232-eb263c188f7e?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1617788138017-80ad40651399?auto=format&fit=crop&w=1000&q=80',
                ],
                'rating' => 4.98,
                'trips' => 620,
                'features' => ['Captain Seats', 'Dual Aircon', 'Luggage Compartment', 'USB Fast Chargers'],
            ],
            [
                'id' => 'van-2',
                'name' => 'Hyundai Staria Premium 9-Seat',
                'plate' => 'NGA 7714',
                'color' => 'Abyss Black Pearl',
                'category' => 'Van',
                'badge' => 'Futuristic Comfort',
                'seats' => '9 Seats',
                'transmission' => 'Automatic',
                'fuel' => 'Diesel',
                'hourly_rate' => 520,
                'daily_rate' => 5200,
                'image' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?auto=format&fit=crop&w=1000&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1617788138017-80ad40651399?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1570125909232-eb263c188f7e?auto=format&fit=crop&w=1000&q=80',
                ],
                'rating' => 4.94,
                'trips' => 140,
                'features' => ['Reclining Ottoman Seats', 'Dual Sunroof', 'Smart Power Sliding Doors', 'Surround View'],
            ],
            [
                'id' => 'compact-1',
                'name' => 'Toyota Wigo 1.0 G',
                'plate' => 'NHD 3318',
                'color' => 'Orange Metallic',
                'category' => 'Hatchback',
                'badge' => 'Fuel Efficient',
                'seats' => '5 Seats',
                'transmission' => 'Automatic',
                'fuel' => 'Unleaded',
                'hourly_rate' => 140,
                'daily_rate' => 1400,
                'image' => 'https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?auto=format&fit=crop&w=1000&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?auto=format&fit=crop&w=1000&q=80',
                ],
                'rating' => 4.88,
                'trips' => 512,
                'features' => ['Easy Parking', '20+ km/L Economy', 'Touchscreen Infotainment', 'Reverse Sensors'],
            ],
            [
                'id' => 'luxury-1',
                'name' => 'Mercedes-Benz C-Class AMG',
                'plate' => 'NJB 1001',
                'color' => 'Obsidian Black',
                'category' => 'Luxury',
                'badge' => 'Executive Prestige',
                'seats' => '5 Seats',
                'transmission' => 'Automatic',
                'fuel' => 'Premium Unleaded',
                'hourly_rate' => 750,
                'daily_rate' => 7500,
                'image' => 'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1000&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1000&q=80',
                    'https://images.unsplash.com/photo-1590362891991-f776e747a588?auto=format&fit=crop&w=1000&q=80',
                ],
                'rating' => 5.0,
                'trips' => 88,
                'features' => ['Burmester Sound', 'Ambient Lighting', 'Chauffeur Option', 'VIP Airport Transfer'],
            ],
        ];

        $appInfo = [
            'name' => 'Mobilis: All-In-One Car Rental App',
            'version' => 'v2.5.0',
            'size' => '32.8 MB',
            'rating' => '4.9 ★ (18.5k reviews)',
            'downloads' => '200,000+',
            'description' => 'The single official Mobilis App for everyone. Rent by the hour or day, drive as an accredited chauffeur, or host your vehicle fleet all in one app!',
        ];

        return view('home', compact('fleet', 'appInfo'));
    }

    /**
     * Show Terms of Service page.
     */
    public function terms(): View
    {
        return view('legal.terms');
    }

    /**
     * Show Privacy Policy page.
     */
    public function privacy(): View
    {
        return view('legal.privacy');
    }

    /**
     * Show Security & Insurance page.
     */
    public function insurance(): View
    {
        return view('legal.insurance');
    }

    /**
     * Download handler for the unified Mobilis APK package.
     */
    public function download()
    {
        $filename = 'Mobilis-App-v2.5.0.apk';

        $dummyApkContent = "# MOBILIS OFFICIAL UNIFIED MOBILE APPLICATION PACKAGE\n"
            ."Application: Mobilis All-In-One App (Renter, Driver & Partner Modes)\n"
            ."Version: 2.5.0\n"
            ."Package: com.mobilis.carrental\n"
            .'Built: '.date('Y-m-d H:i:s')."\n"
            ."Ecosystem: 100% Dedicated Car Rental Platform (Hourly & Daily Rates)\n"
            ."Security: Verified by Mobilis Play Protect & CodeSign Certificate\n";

        return response($dummyApkContent, 200, [
            'Content-Type' => 'application/vnd.android.package-archive',
            'Content-Disposition' => 'attachment; filename="'.$filename.'"',
            'Cache-Control' => 'no-cache, must-revalidate',
        ]);
    }
}
