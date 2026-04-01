<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'name' => 'Mobile Legends',
                'description' => 'Top up diamond untuk Mobile Legends',
                'category' => 'mobile',
                'image_url' => 'https://via.placeholder.com/200x150?text=Mobile+Legends',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Free Fire',
                'description' => 'Top up diamond untuk Free Fire',
                'category' => 'mobile',
                'image_url' => 'https://via.placeholder.com/200x150?text=Free+Fire',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PUBG Mobile',
                'description' => 'Top up UC untuk PUBG Mobile',
                'category' => 'mobile',
                'image_url' => 'https://via.placeholder.com/200x150?text=PUBG+Mobile',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Valorant',
                'description' => 'Top up VP untuk Valorant',
                'category' => 'pc',
                'image_url' => 'https://via.placeholder.com/200x150?text=Valorant',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CS GO',
                'description' => 'Top up untuk CS GO',
                'category' => 'pc',
                'image_url' => 'https://via.placeholder.com/200x150?text=CS+GO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FIFA',
                'description' => 'Top up untuk FIFA',
                'category' => 'console',
                'image_url' => 'https://via.placeholder.com/200x150?text=FIFA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('utilities')->insertOrIgnore([
            ['key' => 'site_title', 'value' => 'TopUpGames'],
            ['key' => 'site_subtitle', 'value' => 'Top up kredit game cepat, aman, dan murah'],
            ['key' => 'site_description', 'value' => 'Platform top up games modern, support semua game populer.'],
            ['key' => 'flashsale_expiry_message', 'value' => 'Flash sale berakhir dalam %s']
        ]);

        DB::table('flash_sales')->insert([
            [
                'name' => 'Flash Sale MLBB',
                'description' => 'Diskon 20% untuk pembelian diamond Mobile Legends',
                'discount' => 20.00,
                'start_at' => now()->subHour(),
                'end_at' => now()->addHours(6),
                'category' => 'mobile',
                'image_url' => 'https://via.placeholder.com/200x150?text=Mobile+Legends+Flash',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Flash Sale FF',
                'description' => 'Diskon 15% untuk pembelian diamond Free Fire',
                'discount' => 15.00,
                'start_at' => now()->subHour(),
                'end_at' => now()->addHours(4),
                'category' => 'mobile',
                'image_url' => 'https://via.placeholder.com/200x150?text=Free+Fire+Flash',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
