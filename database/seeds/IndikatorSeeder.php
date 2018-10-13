<?php

use Illuminate\Database\Seeder;

class IndikatorSeeder extends Seeder
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
                'kriteria' => 'Perumusan Masalah',
                'deskripsi' => 'Ketajaman perumusan masalah dan tujuan Proyek Akhir',
            ],
            1 => [
                'kriteria' => 'Manfaat Proyek Akhir',
                'deskripsi' => 'Pengembangan IPTEKS, pembangunan dan atau pengebangan kelembagaan',
            ],
            2 => [
                'kriteria' => 'Tinjauan Pustakan',
                'deskripsi' => 'Relevansi, kemutakhira, dan penyusunan daftar pustaka',
            ],
            3 => [
                'kriteria' => 'Metodologi',
                'deskripsi' => 'Ketepatan metode yang digunakan',
            ],
            4 => [
                'kriteria' => 'Tata Tulis',
                'deskripsi' => 'Bahasa, format dan sistematika proposal proyek akhir',
            ],
            5 => [
                'kriteria' => 'Presentasi',
                'deskripsi' => 'Sistematika dan materi/bahan presentasi, obyektifitas dalam menaggapi pertanyaan dan mempertahankan pendapat',
            ],
        );

        $result = DB::table('indikators')->insert($data);

    }
}
