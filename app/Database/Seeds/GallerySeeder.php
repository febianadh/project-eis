<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'Bersimpang Jalan ',
            'tahun'    => '1955',
            'seniman'    => 'Harijadi Sumadidjaja',
            'deskripsi'    => 'Berbeda dengan karya-karya Harijadi yang dilukis dengan gaya realistik, karya “Bersimpang Jalan” ini cenderung lebih ekspresionistik. Penekanan dari goresan kuas yang lebar dan kuat, ditambah dengan pengaturan komposisi dan penempatan figur-figur, memberi kesan dramatis pada adegan yang sedang berlangsung. Tampak dua sosok dewasa berbeda jenis kelamin berjalan saling membelakangi dan masing-masing menggandeng/menuntun anak kecil. Bahkan pada sosok perempuan tersebut, selain menuntun juga sedang menggendong anak. Di belakang dua figur dewasa itu tampak dua orang anak yang saling melihat satu sama lain seakan menunjukkan keengganan untuk berpisah. Di kejauhan, batas cakrawala yang kontras antara langit yang berawan dengan hamparan tanah yang didominasi warna kecokelatan semakin menambah suasana yang kelam.',
        ];

        // Simple Queries
        $this->db->table('gallery2')->insert($data);
        
        $data = [
            'nama' => 'Legenda Jayaprana',
            'tahun'    => '1965',
            'seniman'    => 'I Ketut Soki',
            'deskripsi'    => "Karya ini merupakan salah satu kecenderungan karya young artist, gelombang perupa muda Bali yang belajar melukis kepada pelukis Belanda Arie Smit. Dalam gaya ini yang mejadi ciri visual adalah ungkapan dekoratif naif bentukbentuk dan warnanya cerah dan kaya. Lukisan ini menampilkan sebuah kisah klasik Jayaprana dan Layon Sari yang berada dalam tragedi cinta dan kesetiaan pada penguasa. Dalam lukisan tampak Layon Sari dalam pelukan Sang Raja, sementara Jayaprana diutus berangkat perang dan dibunuh dalam pengkhianatan raja. Di langit terlihat Ratih dan Kamanjaya dengan atribut payung kebesarannya menyaksikan tragedi cinta tersebut.",
        ];
        // Using Query Builder
        $this->db->table('gallery2')->insert($data);
    }
}
