<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $cars = Car::all(['slug', 'updated_at', 'id']);
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        // ===== Static Pages =====
        // Homepage (highest priority)
        $xml .= '<url>';
        $xml .= '<loc>' . route('home') . '</loc>';
        $xml .= '<changefreq>daily</changefreq>';
        $xml .= '<priority>1.0</priority>';
        $xml .= '</url>';
        
        // About page
        $xml .= '<url>';
        $xml .= '<loc>' . route('about') . '</loc>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.7</priority>';
        $xml .= '</url>';
        
        // Contact page
        $xml .= '<url>';
        $xml .= '<loc>' . route('contact') . '</loc>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.7</priority>';
        $xml .= '</url>';
        
        // Cars listing page
        $xml .= '<url>';
        $xml .= '<loc>' . route('cars.index') . '</loc>';
        $xml .= '<changefreq>daily</changefreq>';
        $xml .= '<priority>0.9</priority>';
        $xml .= '</url>';
        
        // Products/Services listing page
        $xml .= '<url>';
        $xml .= '<loc>' . route('products') . '</loc>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.9</priority>';
        $xml .= '</url>';
        
        // ===== Dynamic Service Pages =====
        $services = $this->getServiceSlugs();
        foreach ($services as $service) {
            $xml .= '<url>';
            $xml .= '<loc>' . route('services.show', $service['slug']) . '</loc>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.8</priority>';
            $xml .= '</url>';
        }
        
        // ===== Dynamic Car Pages =====
        foreach ($cars as $car) {
            $xml .= '<url>';
            $xml .= '<loc>' . route('cars.show', $car->slug) . '</loc>';
            $xml .= '<lastmod>' . (isset($car->updated_at) ? $car->updated_at->toAtomString() : date('Y-m-d\TH:i:sP')) . '</lastmod>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.6</priority>';
            $xml .= '</url>';
        }
        
        $xml .= '</urlset>';
        
        return response($xml, 200)->header('Content-Type', 'text/xml');
    }
    
    /**
     * Get all service slugs for sitemap generation.
     */
    private function getServiceSlugs()
    {
        return [
            ['slug' => 'autoastat'],
            ['slug' => 'bidcars'],
            ['slug' => 'auctionhistory-io'],
            ['slug' => 'bidfax'],
            ['slug' => 'autoauctions-io'],
            ['slug' => 'carfast-express'],
            ['slug' => 'atlantic-express'],
            ['slug' => 'auto-bid-master'],
            ['slug' => 'stat-vin'],
            ['slug' => 'plc-group'],
            ['slug' => 'autoauctionhistory'],
            ['slug' => 'america-motors'],
            ['slug' => 'auctionauto-ua'],
        ];
    }
}
