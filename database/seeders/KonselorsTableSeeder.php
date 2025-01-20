<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonselorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('konselors')->insert([
            [
                'name' => 'Rinda Anisah, M.Psi',
                'profile_image' => 'assets/aanisa.png',
                'specializations' => json_encode([
                    'Depresi',
                    'Masalah Keluarga',
                    'Hubungan Percintaan',
                    'Karir & Pekerjaan',
                    'Dan lainnya'
                ]),
                'bio' => 'Psikolog Klinis spesialis di berbagai bidang.',
                'about_me' => 'Halo Sobat Plong,
Salam kenal, saya Rinda A’anisah, seorang psikolog klinis dewasa. Saya menyelesaikan Pendidikan S1 Psikologi di Fakultas Psikologi Universitas Diponegoro, dan melanjutkan S2 Magister Profesi Psikologi Klinis Dewasa di Universitas Indonesia. Sesuai latar pendidikan saya, saya terbiasa bertemu klien di usia dewasa hingga lansia. Dengan dua tahun pengalaman berpraktik di bidang psikologi klinis, saya telah banyak menangani keluhan terkait kecemasan, depresi, kepercayaan diri, masalah keluarga maupun relasi romantis, hingga isu-isu di ranah pekerjaan, seperti pemilihan karier dan burnout. Selama berpraktik, beberapa pendekatan yang umum saya gunakan adalah Cognitive Behavior Therapy (CBT), Acceptance and Commitment Therapy (ACT), dan Logotherapy.',
                'handled_cases' => 'Berpengalaman menangani keluhan terkait kecemasan, depresi, kepercayaan diri, masalah keluarga maupun relasi romantis, hingga isu-isu di ranah pekerjaan, seperti pemilihan karier dan burnout. ',
                'clinical_approaches' => 'Cognitive Behavior Therapy (CBT), Acceptance and Commitment Therapy (ACT), dan Logotherapy.',
            ],
            [
                'name' => 'Almira Devina, M.Psi',
                'profile_image' => 'assets/almira.png',
                'specializations' => json_encode([
                    'Depresi',
                    'Masalah Keluarga',
                    'Hubungan Percintaan',
                    'Karir & Pekerjaan',
                    'Dan lainnya'
                ]),
                'bio' => 'Psikolog Klinis dengan fokus pada kesehatan mental.',
                'about_me' => 'Halo, saya Mira, di sini sebagai psikologi klinis yang menjalani studi profesi psikologi Klinis Anak dan Remaja di Universitas Indonesia. Sejak berpraktik sebagai mahasiswa profesi, saya fokus pada bidang perkembangan anak, gangguan klinis anak, serta pengasuhan dan hubungan keluarga. Selain itu, saya juga memiliki pengalaman untuk mendampingi klien usia dewasa dalam menghadapi masalah relasional dan personal. Saya paham bahwa masalah merupakan bagian dari kehidupan setiap individu, baik dewasa, anak, dan remaja. Saya juga yakin bahwa setiap orang mampu berdaya dalam menghadapi masalah yang ada. Hanya saja, terkadang kita membutuhkan bantuan agar proses tersebut dapat berjalan dengan lebih ringan. Oleh karena itu, peran saya di sini adalah untuk membantu dan mendampingi Anda menemukan keberdayaan diri dalam menghadapi masalah yang ada.',
                'handled_cases' => 'Pengasuhan dan perkembangan anak hingga remaja, pengelolaan stres, depresi, masalah relasional (keterikatan), pengelolaan rasa marah, trauma. Juga memiliki pengalaman menangani isu-isu terkait interrelasi individu, seperti masalah hubungan dengan pasangan dan anggota keluarga, masalah terkait kesedihan atau kehilangan, masalah pemilihan jurusan. ',
                'clinical_approaches' => 'Terapi yang Berpusat pada Klien, Terapi Perilaku Kognitif, Terapi Sistem Keluarga, Modifikasi Perilaku.',
            ],
            [
                'name' => 'Muhammad Hanif Karomi, M.Kom',
                'profile_image' => 'assets/dicky.png',
                'specializations' => json_encode([
                    'Depresi',
                    'Masalah Keluarga',
                    'Hubungan Percintaan',
                    'Karir & Pekerjaan',
                    'Dan lainnya'
                ]),
                'bio' => 'Psikolog Klinis yang berpengalaman dalam berbagai kasus.',
                'about_me' => 'Hai Sobat Plong,
Perkenalkan, saya Dicky, psikologi di bidang klinis dewasa. Saya menyelesaikan pendidikan Sarjana Psikologi Universitas Sanata Dharma, Yogyakarta dan Magister Profesi Psikologi dari Universitas Katolik Soegijapranata, Semarang. Saya memiliki fokus untuk menangani klien dewasa dengan batasan usia sekitar 18-50 tahun.',
                'handled_cases' => 'Kasus yang saya tangani beragam, dari yang paling umum seperti gangguan stres, gangguan kecemasan, gangguan depresi, masalah penyesuaian diri, duka dan kehilangan, serta isu-isu yang berkaitan dengan seksualitas. Selain permasalahan psikologis tersebut, saya juga fokus pada peningkatan welas asih dalam diri individu untuk meningkatkan kesejahteraan.',
                'clinical_approaches' => 'Terapi yang Berpusat pada Klien, Terapi Perilaku Kognitif, Terapi Sistem Keluarga, Modifikasi Perilaku.'
            ],
            [
                'name' => 'Rafli Firmansyah, M.Psi',
                'profile_image' => 'assets/annisaaxel.png',
                'specializations' => json_encode([
                    'Depresi',
                    'Masalah Keluarga',
                    'Hubungan Percintaan',
                    'Karir & Pekerjaan',
                    'Dan lainnya'
                ]),
                'bio' => 'Psikolog Klinis dengan pendekatan holistik.',
                'about_me' => 'Tentang Saya
Halo, Salam kenal, saya Annisa Axelta, seorang psikolog klinis dewasa yang lulus dari Program Magister Profesi Psikologi Klinis Dewasa Universitas Padjadjaran. Bagi saya, memberikan bantuan dan perubahan signifikan ke arah yang positif kepada kehidupan individu merupakan hal yang utama. Saya percaya bahwa setiap individu memiliki potensi untuk mampu memaknai setiap langkah kecilnya menunju kondisi aktual- Bangkit kembali, Mengenali dan menggunakan kemampuan dirinya, Menemukan kembali makna dan tujuan kehidupan, Berkembang dan mampu menikmati kesehariannya.
Psikolog HatiPlong lainnya
Sejauh ini, saya banyak menangani keluhan yang sering dialami oleh remaja dan dewasa, terkait stress dan gangguan kecemasan, depresi, permasalahan relasi, hubungan romantis, permasalahan keluarga dan pernikahan, pengembangan diri dan karir, quarter life crisis, self esteem dan gangguan kepribadian.  Sesuai pengalaman, beberapa kali saya diberikan kesempatan untuk saling berdiskusi dan menjadi narasumber pada berbagai acara yang berhubungan dengan kesehatan mental maupun well being.
Kunci utama saya dalam memahami setiap individu adalah dengan menerima. Menerima bahwa setiap individu memiliki suatu pengalaman tertentu, baik pengalaman positif, maupun negatif, yang membentuk diri kita sekarang. Menerima bahwa setiap individu boleh merasakan berbagai emosi. Dengan kondisi apapun, saya percaya bahwa setiap individu memiliki value dan berharga. Oleh karena itu, saya berusaha untuk menciptakan kenyamanan dalam setiap sesi, dan berperan untuk mendampingi serta bekerjasama mencari harapan dan membuat hidup semakin berharga untuk dijalani. Mari kita berproses bersama-sama, dan perlahan-lahan..',
                'handled_cases' => 'Stress dan Gangguan Kecemasan, Depresi, Hubungan Romantis, Permasalahan Relasi, Pernikahan, Pengembangan Diri, Kesulitan Beradaptasi, Quarter Life Crisis, Self esteem.',
                'clinical_approaches' => 'Pendekatan Cognitive Behavior Therapy, Acceptance and Commitment Therapy, Client-Centered Therapy, Behavior Modification, Brief Solution Focused Therapy.'
            ]
        ]);
    }
}
