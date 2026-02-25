<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Blog;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        try {
            $xml = \Illuminate\Support\Facades\Cache::remember('sitemap_xml', 3600, function () {
                return $this->generateSitemap();
            });
        } catch (\Exception $e) {
            $xml = $this->generateStaticSitemap();
        }

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

    private function generateSitemap()
    {
        $cars = Car::all(['slug', 'updated_at', 'id']);
        $blogs = Blog::where('is_published', true)->get(['slug', 'updated_at', 'id']);
        
        // Use the current request's root URL instead of relying solely on APP_URL
        // This ensures the sitemap URLs match the domain it's being served from.
        $baseUrl = url('/');
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        // ===== Static Pages =====
        // Homepage
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '</loc>';
        $xml .= '<changefreq>daily</changefreq>';
        $xml .= '<priority>1.0</priority>';
        $xml .= '</url>';
        
        // About page
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/about</loc>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.7</priority>';
        $xml .= '</url>';
        
        // Contact page
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/contact</loc>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.7</priority>';
        $xml .= '</url>';
        
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/disclaimer</loc>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.3</priority>';
        $xml .= '</url>';
        
        // Terms of Service page
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/terms</loc>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.5</priority>';
        $xml .= '</url>';
        
        // Privacy Policy page
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/privacy-policy</loc>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.5</priority>';
        $xml .= '</url>';
        
        // Cars listing page
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/cars</loc>';
        $xml .= '<changefreq>daily</changefreq>';
        $xml .= '<priority>0.9</priority>';
        $xml .= '</url>';
        
        // Products/Services listing page
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/products</loc>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.9</priority>';
        $xml .= '</url>';
        
        // Blog listing page
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/blog</loc>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';
        
        // ===== Dynamic Service Pages =====
        $services = $this->getServiceSlugs();
        foreach ($services as $service) {
            $xml .= '<url>';
            $xml .= '<loc>' . $baseUrl . '/services/' . $service['slug'] . '</loc>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.8</priority>';
            $xml .= '</url>';
        }
        
        // ===== Dynamic Blog Pages =====
        foreach ($blogs as $blog) {
            $xml .= '<url>';
            $xml .= '<loc>' . $baseUrl . '/blog/' . $blog->slug . '</loc>';
            $xml .= '<lastmod>' . (isset($blog->updated_at) ? $blog->updated_at->toAtomString() : date('Y-m-d\TH:i:sP')) . '</lastmod>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.7</priority>';
            $xml .= '</url>';
        }
        
        // ===== Dynamic Car Pages =====
        foreach ($cars as $car) {
            $xml .= '<url>';
            $xml .= '<loc>' . $baseUrl . '/cars/' . $car->slug . '</loc>';
            $xml .= '<lastmod>' . (isset($car->updated_at) ? $car->updated_at->toAtomString() : date('Y-m-d\TH:i:sP')) . '</lastmod>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.6</priority>';
            $xml .= '</url>';
        }
        
        $xml .= '</urlset>';
        
        return $xml;
    }

    /**
     * Generate a static-only sitemap (no DB queries) as fallback.
     */
    private function generateStaticSitemap()
    {
        $baseUrl = request()->root();
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        $staticPages = [
            ['loc' => '', 'freq' => 'daily', 'priority' => '1.0'],
            ['loc' => '/about', 'freq' => 'monthly', 'priority' => '0.7'],
            ['loc' => '/contact', 'freq' => 'monthly', 'priority' => '0.7'],
            ['loc' => '/cars', 'freq' => 'daily', 'priority' => '0.9'],
            ['loc' => '/products', 'freq' => 'weekly', 'priority' => '0.9'],
            ['loc' => '/blog', 'freq' => 'weekly', 'priority' => '0.8'],
            ['loc' => '/privacy-policy', 'freq' => 'monthly', 'priority' => '0.5'],
            ['loc' => '/disclaimer', 'freq' => 'monthly', 'priority' => '0.3'],
            ['loc' => '/terms', 'freq' => 'monthly', 'priority' => '0.5'],
        ];

        foreach ($staticPages as $page) {
            $xml .= '<url>';
            $xml .= '<loc>' . $baseUrl . $page['loc'] . '</loc>';
            $xml .= '<changefreq>' . $page['freq'] . '</changefreq>';
            $xml .= '<priority>' . $page['priority'] . '</priority>';
            $xml .= '</url>';
        }

        $services = $this->getServiceSlugs();
        foreach ($services as $service) {
            $xml .= '<url>';
            $xml .= '<loc>' . $baseUrl . '/services/' . $service['slug'] . '</loc>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.8</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';
        return $xml;
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
