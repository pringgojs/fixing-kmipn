<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $result = DB::table('users')->insert([
            'fullname' => 'ketua',
            'email' => 'ketua@kmipn.com',
            'password' => Hash::make('sandiaman'),
            'tim_id' => 1,
            'no_mahasiswa' => 2103171036,
            'jenis_kelamin' => 'Laki-laki',
            'jurusan' => 'IT',
            'alamat' => 'Surabaya',
            'tempat_lahir' => 'Surabaya',
            'tgl_lahir' => new DateTime,
            'no_telp' => '0895337348558',
            'role' => 'Ketua',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        $result = DB::table('users')->insert([
            'fullname' => 'anggota1',
            'email' => 'anggota1@kmipn.com',
            'tim_id' => 1,
            'no_mahasiswa' => 2103171036,
            'jenis_kelamin' => 'Laki-laki',
            'jurusan' => 'IT',
            'alamat' => 'Surabaya',
            'tempat_lahir' => 'Surabaya',
            'tgl_lahir' => new DateTime,
            'no_telp' => '0895337348558',
            'role' => 'Anggota',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        $result = DB::table('users')->insert([
            'fullname' => 'Anggota2',
            'email' => 'Anggota2@kmipn.com',
            'tim_id' => 1,
            'no_mahasiswa' => 2103171036,
            'jenis_kelamin' => 'Laki-laki',
            'jurusan' => 'IT',
            'alamat' => 'Surabaya',
            'tempat_lahir' => 'Surabaya',
            'tgl_lahir' => new DateTime,
            'no_telp' => '0895337348558',
            'role' => 'Anggota',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
