<?php

use Illuminate\Database\Seeder;

class LombaTableSeeder extends Seeder
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
                'kategori_id' => 1,
                'pengumuman' => '',
                'deskripsi' => 'Lomba Cipta Inovasi KMIPN 2018 adalah wadah 
                                bagi para mahasiswa politeknik seluruh Indonesia untuk 
                                menuliskan terobosan ide kreatif mereka sebagai salah satu 
                                bentuk intellectual respons atas segala permasalahan nyata
                                di bidang TIK (Teknologi Informasi dan Komunikasi) 
                                masyarakat Indonesia. Ide yang diajukan diharapkan 
                                bersifat unik, kreatif, visioner, futuristik dan bermanfaat.',
                'peraturan' => 'Cipta_Inovasi.pdf',
                'icon' => 'lamp.svg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori_id' => 2,
                'pengumuman' => '',
                'deskripsi' => 'Lomba Bisnis TIK adalah kompetisi pengembangan 
                                model bisnis dengan produk TIK. Lomba ini memberikan 
                                kesempatan kepada peserta yang memiliki ide bisnis, 
                                startup dan pengembangan usaha yang berorientasi pada 
                                produk TIK, berupa jasa atau produk.',
                'peraturan' => 'LOMBA_BISNIS_TIK.pdf',
                'icon' => 'briefcase.svg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori_id' => 3,
                'pengumuman' => '',
                'deskripsi' => 'Game Development adalah salah satu cabang kompetisi 
                                KMIPN yang diadakan oleh PENS. Game Development 
                                KMIPN ditujukan untuk seluruh mahasiswa politeknik se- 
                                Indonesia. Game Development KMIPN tidak membatasi 
                                tema sehingga para peserta dapat berkreasi sekreatif 
                                mungkin dalam permainan mereka.',
                'peraturan' => 'Game_Development.pdf',
                'icon' => 'console.svg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori_id' => 4,
                'pengumuman' => '',
                'deskripsi' => 'e-Government merupakan pemanfaatan teknologi 
                                informasi berbasis internet oleh pemerintah dalam 
                                memberikan informasi dan layanan kepada masyarakat, 
                                bisnis, pegawai, atau pemerintah lainnya, atau sebaliknya 
                                masyarakat atau bisnis dapat berinteraksi, atau 
                                memberikan informasi kepada pemerintah.',
                'peraturan' => 'KATEGORI_LOMBA_E-Gov.pdf',
                'icon' => 'city-hall.svg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori_id' => 5,
                'pengumuman' => '',
                'deskripsi' => 'Lomba Piranti Cerdas adalah kompetisi karya rekayasa 
                                pada keilmuan teknik elektro yang bertujuan untuk 
                                mendorong yang dihasilkan karya-karya penelitian inovatif 
                                yang mengintegrasikan aspek-aspek design dari design 
                                sistem hingga perangkat, metodologi dan implementasi.',
                'peraturan' => '',
                'icon' => 'cpu.svg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori_id' => 6,
                'pengumuman' => '',
                'deskripsi' => 'Desain animasi adalah sebuah kompetisi pembuatan video 
                                animasi pendek dalam bentuk 2D/3D yang memberikan 
                                informasi dan pengenalan singkat yang unik dan menarik 
                                tentang revolusi industri di Indonesia, untuk memberikan 
                                kesadaran terhadap masyarakat luas tentang 
                                perkembangan teknologi di industri Indonesia.',
                'peraturan' => 'Rancangan_Desain_Animasi.pdf',
                'icon' => 'video-player.svg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori_id' => 7,
                'pengumuman' => '',
                'deskripsi' => 'Lomba keamanan jaringan adalah lomba untuk menguji 
                                kemampuan mengamankan sistemkomputer beserta 
                                jaringannya. Peserta akan berkompetisi dengan peserta lain 
                                dalam kemampuan mengkongurasi sistem yang aman dan 
                                melakukan identikasi potensi celahkeamanan dari sistem 
                                komputer yang ada kemudian memberikan solusi 
                                keamanannya.',
                'peraturan' => 'KEAMANAN_JARINGAN_Today.pdf',
                'icon' => 'shield.svg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'kategori_id' => 8,
                'pengumuman' => '',
                'deskripsi' => 'Hacking adalah pemecahan masalah yang kretif (tidak 
                                harus melibatkan teknologi). Hackathon adalah acara 
                                tentang apapun dari suatu waktu tertentu dimana orang 
                                berkumpul untuk menyelesaikan masalah. Kebanyakan 
                                hackathon yang dilakukan juga memiliki trek parallel untuk 
                                karya hackathon (banyak karya yang dihasilkan).',
                'peraturan' => 'Hackathon.pdf',
                'icon' => 'programmer.svg',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            
        ];
        $result = DB::table('lomba')->insert($data);
    }
}
