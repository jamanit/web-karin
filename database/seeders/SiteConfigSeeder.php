<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteConfigSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            [
                'name'  => 'Site Name',
                'key'   => 'site_name',
                'type'  => 'text',
                'value' => 'Web Karin',
            ],
            [
                'name'  => 'Website URL',
                'key'   => 'website_url',
                'type'  => 'url',
                'value' => 'https://web-karin.com',
            ],
            [
                'name'  => 'Address',
                'key'   => 'address',
                'type'  => 'text',
                'value' => 'Jl. Patimura Simp. Rimbo Kota Jambi.',
            ],
            [
                'name'  => 'Map URL',
                'key'   => 'map_url',
                'type'  => 'url',
                'value' => 'https://maps.app.goo.gl/BzF4gAmrKWkrqMVa6',
            ],
            [
                'name'  => 'About Us',
                'key'   => 'about_us',
                'type'  => 'textarea',
                'value' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam dignissimos quod qui consequatur, sed aut, accusantium quae enim, laboriosam aperiam porro officia ab distinctio ipsam.</p>',
            ],
            [
                'name'  => 'Colored Logo',
                'key'   => 'colored_logo',
                'type'  => 'file',
                'file'  => null,
            ],
            [
                'name'  => 'White Logo',
                'key'   => 'white_logo',
                'type'  => 'file',
                'file'  => null,
            ],
            [
                'name'  => 'Favicon',
                'key'   => 'favicon',
                'type'  => 'file',
                'file'  => null,
            ],
            [
                'name'  => 'Primary Color',
                'key'   => 'primary_color',
                'type'  => 'text',
                'value' => 'green',
            ],
            [
                'name'  => 'Banner',
                'key'   => 'banner',
                'type'  => 'file',
                'file'  => null,
            ],
            [
                'name'  => 'Hero Banner',
                'key'   => 'hero_banner',
                'type'  => 'file',
                'file'  => null,
            ],
            [
                'name'  => 'Title Banner',
                'key'   => 'title_banner',
                'type'  => 'textarea',
                'value' => '<p>Selamat Datang di Website</p><p>Karin</p>',
            ],
            [
                'name'  => 'Caption Banner',
                'key'   => 'caption_banner',
                'type'  => 'textarea',
                'value' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis odio, fugiat porro alias repellendus dolor?</p>',
            ],
            [
                'name'  => 'Phone Number',
                'key'   => 'phone_number',
                'type'  => 'number',
                'value' => '6289508475453',
            ],
            [
                'name'  => 'Email',
                'key'   => 'email',
                'type'  => 'email',
                'value' => 'webkarin@gmail.com',
            ],
            [
                'name'  => 'WhatsApp Number',
                'key'   => 'whatsapp_number',
                'type'  => 'number',
                'value' => '6289508475453',
            ],
            [
                'name'  => 'Instagram URL',
                'key'   => 'instagram_url',
                'type'  => 'url',
                'value' => null,
            ],
            [
                'name'  => 'Facebook URL',
                'key'   => 'facebook_url',
                'type'  => 'url',
                'value' => null,
            ],
            [
                'name'  => 'TikTok URL',
                'key'   => 'tiktok_url',
                'type'  => 'url',
                'value' => null,
            ],
        ];

        foreach ($data as $item) {
            \App\Models\SiteConfig::updateOrCreate(['key' => $item['key']], $item);
        }
    }
}
