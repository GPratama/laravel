<?php

namespace Database\Seeders;

use App\Models\kategori;
use App\Models\produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'gg@localhost.com',
            'password'=>bcrypt('admin'),
            'role'=>'admin'
        ]);
        User::create([
            'name'=>'customer',
            'email'=>'gp@localhost.com',
            'password'=>bcrypt('customer'),
            'role'=>'customer'
        ]);
        $kategori = kategori::create([
            'name'=>'hp'
        ]);
        produk::create([
            'kategori_id'=>$kategori->id,
            'name'=>'hp',
            'harga'=>200000,
            'foto'=>"images/images (4).jpg"
        ]);
    }
}
