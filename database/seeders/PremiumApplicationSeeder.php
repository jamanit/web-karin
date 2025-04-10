<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PremiumApplicationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            [
                'image'       => null,
                'title'       => 'Youtube Premium',
                'price'       => 50000,
                'discount'    => null,
                'description' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem explicabo incidunt velit odit, eius deleniti numquam ex quas reiciendis aspernatur eligendi quisquam provident maxime aut.</p>',
            ],
            [
                'image'       => null,
                'title'       => 'Cupcut Premium',
                'price'       => 50000,
                'discount'    => 'Disc 10%',
                'description' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem explicabo incidunt velit odit, eius deleniti numquam ex quas reiciendis aspernatur eligendi quisquam provident maxime aut.</p>',
            ],
        ];

        foreach ($data as $item) {
            \App\Models\PremiumApplication::updateOrCreate(['title' => $item['title']], $item);
        }
    }
}
