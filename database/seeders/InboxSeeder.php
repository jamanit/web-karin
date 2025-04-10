<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InboxSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            [
                'name'    => 'User',
                'email'   => 'user@gmail.com',
                'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, eveniet. Inventore quo eius facere quae quaerat distinctio nesciunt porro rerum reiciendis veritatis, quos doloribus quis omnis harum ipsum provident. Reprehenderit.',
                'status'  => false,
            ],
        ];

        foreach ($data as $item) {
            \App\Models\Inbox::updateOrCreate(['name' => $item['name']], $item);
        }
    }
}
