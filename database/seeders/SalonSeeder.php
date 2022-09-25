<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salon;

class SalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salon::create([
            'salonname' => 'omotesando beauty',
            'adress' => '東京都渋谷区表参道xxxx',
            'image_path' => 'salonimg1.jpg',
        ]);
        Salon::create([
            'salonname' => '【cima】 渋谷店',
            'adress' => '`東京都渋谷区道玄坂9-45-189',
            'image_path' => 'salonimg2.jpg',
        ]);
        Salon::create([
            'salonname' => 'melon 北参道',
            'adress' => '東京都渋谷区千駄ヶ谷5-9-87',
            'image_path' => 'salonimg3.jpg',
        ]);
        Salon::create([
            'salonname' => 'shinjuku viace',
            'adress' => '東京都新宿区vビル',
            'image_path' => 'salonimg4.jpg',
        ]);
        Salon::create([
            'salonname' => 'black harajyuku',
            'adress' => '東京都渋谷区渋谷45-3-987',
            'image_path' => 'salonimg5.jpg',
        ]);
        Salon::create([
            'salonname' => '恵比寿 uma',
            'adress' => '東京都渋谷区恵比寿46-8',
            'image_path' => 'salonimg6.jpg',
        ]);
        Salon::create([
            'salonname' => 'hairsalon 渋',
            'adress' => '東京都渋谷区宮益坂987',
            'image_path' => 'salonimg7.jpg',
        ]);
        Salon::create([
            'salonname' => 'sunny sinnjyuku',
            'adress' => '東京都渋谷区代々木67-9823',
            'image_path' => 'salonimg8.jpg',
        ]);
        Salon::create([
            'salonname' => 'UP 原宿口店',
            'adress' => '東京都渋谷区原宿74-26-355',
            'image_path' => 'salonimg9.jpg',
        ]);
        Salon::create([
            'salonname' => 'yellow',
            'adress' => '東京都新宿区代々木23-87',
            'image_path' => 'salonimg10.jpg',
        ]);

    }
}
