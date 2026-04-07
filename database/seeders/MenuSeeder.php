<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            ['name' => 'Cilok Original', 'price' => 'Rp. 16.000', 'price_numeric' => 16000],
            ['name' => 'Cilok Keju', 'price' => 'Rp. 16.000', 'price_numeric' => 16000],
            ['name' => 'Cilok Pedas', 'price' => 'Rp. 16.000', 'price_numeric' => 16000],
            ['name' => 'Cilok Kuah', 'price' => 'Rp. 16.000', 'price_numeric' => 16000],
            ['name' => 'Cilok Bakar', 'price' => 'Rp. 16.000', 'price_numeric' => 16000],
            ['name' => 'Cilok Combo', 'price' => 'Rp. 16.000', 'price_numeric' => 16000],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}