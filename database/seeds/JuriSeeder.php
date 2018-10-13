<?php

use Illuminate\Database\Seeder;

class JuriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            0 => [
                'nama' => 'M. Udin Harun Alrasyid  PhD',
                'username' => 'juri1',
                'password' => 'password1',
                'kategori_id' => 5,
                'asal_politeknik' => 'PENS'
            ],
            1 => [
                'nama' => 'Anang',
                'username' => 'juri2',
                'password' => 'password2',
                'kategori_id' => 3,
                'asal_politeknik' => 'PENS'
            ],
            2 => [
                'nama' => 'Mardiyono S.Kom., MSc.',
                'username' => 'juri3',
                'password' => 'password3',
                'kategori_id' => 8,
                'asal_politeknik' => 'Polines'
            ],
            3 => [
                'nama' => 'Hata Maulana S.Si, M.T.I',
                'username' => 'juri4',
                'password' => 'password4',
                'kategori_id' => 2,
                'asal_politeknik' => 'PNJ'
            ],
            4 => [
                'nama' => 'Eddy Tungadi, S.T.,M.T.',
                'username' => 'juri5',
                'password' => 'password5',
                'kategori_id' => 7,
                'asal_politeknik' => 'Poli Ujung Pandang'
            ],
            5 => [
                'nama' => 'Aji Seto Arifianto S.ST., M.T ',
                'username' => 'juri6',
                'password' => 'password6',
                'kategori_id' => 6,
                'asal_politeknik' => 'Poli Jember'
            ],
            6 => [
                'nama' => 'Bambang Wisnuadi, S.Si., M.T.',
                'username' => 'juri7',
                'password' => 'password7',
                'kategori_id' => 1,
                'asal_politeknik' => 'Politeknik Negeri Bandung '
            ],
            7 => [
                'nama' => 'Mira Chandra Kirana, S.T.,M.T. ',
                'username' => 'juri8',
                'password' => 'password8',
                'kategori_id' => 4,
                'asal_politeknik' => 'Politeknik Negeri Batam'
            ],
        );

        $result = DB::table('juris')->insert($data);
    }
}
