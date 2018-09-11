<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kategori' => 'Cipta Inovasi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori' => 'Bisnis Tik',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori' => 'Game Development',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori' => 'E-Goverment',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori' => 'IoT (Internet of Things)',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori' => 'Desain Animasi',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori' => 'Keamanan Jaringan',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori' => 'Hackathon',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            
        ];

        $result = DB::table('kategori')->insert($data);
    }
}
