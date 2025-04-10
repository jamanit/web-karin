<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            [
                'name'   => 'Riki David',
                'text'   => 'Aplikasi premium yang luar biasa! Sangat membantu dalam meningkatkan produktivitas dengan fitur-fitur canggih yang mudah digunakan.',
                'star'   => 5,
                'status' => true,
            ],
            [
                'name'   => 'Rahmawati',
                'text'   => 'Sangat puas dengan aplikasi ini! Desain yang modern dan fitur yang sangat lengkap memenuhi semua kebutuhan profesional saya.',
                'star'   => 5,
                'status' => true,
            ],
            [
                'name'   => 'Zaki Dhia',
                'text'   => 'Aplikasi ini memberikan pengalaman terbaik. Penggunaannya sangat mudah, dan performanya sangat stabil. Highly recommended!',
                'star'   => 4,
                'status' => true,
            ],
            [
                'name'   => 'Heri Saputra',
                'text'   => 'Aplikasi dengan performa luar biasa! Sangat membantu dalam pekerjaan sehari-hari, dan fiturnya sangat memudahkan. Terima kasih!',
                'star'   => 5,
                'status' => true,
            ],
            [
                'name'   => 'Khairani',
                'text'   => 'Aplikasi yang sangat berguna dan memiliki kualitas tinggi. Semua fitur premium bekerja dengan sangat baik, sangat puas dengan layanan ini.',
                'star'   => 5,
                'status' => true,
            ],
        ];

        foreach ($data as $item) {
            \App\Models\Testimonial::updateOrCreate(['name' => $item['name']], $item);
        }
    }
}
