<?php

namespace Database\Seeders;

use App\models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::insert([
            'judul' => 'Korupsi',
            'foto' => 'https://i.pinimg.com/474x/f4/2c/53/f42c534b7a84269f6de722e1bf21acad.jpg',
            'kategori' =>'politik',
            'konten' =>'Konten ini berisi tentang tokoh tokoh yang telibat dalam hal korupsi.',
            'penulis'=>'Ivan Caraka'
        ]);  
        Artikel::insert([
            'judul' => 'Hari Teknologi Nasional',
            'foto' => 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/national-technology-day-design-template-b248cdbd652b2b6e88545d1fef1b98ee_screen.jpg?ts=1637034748',
            'kategori' =>'Teknologi',
            'konten' =>'Hari Kebangkitan Teknologi Nasional, disingkat Hakteknas merupakan salah satu hari bersejarah nasional yang diperingati setiap tanggal 10 Agustus berdasarkan Keputusan Presiden Republik Indonesia Nomor 71 Tahun 1995. Tujuan peringatan Hakteknas selain untuk menghargai keberhasilan putra-putri Indonesia dalam memanfaatkan, menguasai, dan mengembangkan ilmu pengetahuan dan teknologi (iptek) serta untuk memberi dorongan kepada mereka untuk terus menerus membangkitkan daya inovasi dan kreasi guna kesejahteraan dan peradaban bangsa Indonesia.',
            'penulis'=>'Kurniawan Ivan '
        ]);  
        Artikel::insert([
            'judul' => 'Buku Adalah Jendela Dunia',
            'foto' => 'https://akcdn.detik.net.id/community/media/visual/2023/05/16/poster-pendidikan-tentang-buku.png?w=1587',
            'kategori' =>'Pendidikan',
            'konten' =>'Istilah buku diibaratkan sebagai jendela dunia sendiri memiliki sejarah dan alasan. Sejarah buku berawal dari zaman mesir kuno di tahun 2400 SM. Pada saat itu, orang-orang mesir mencoba menuliskan simbol-simbol di daun Papyrus yang dijadikan sebagai selembar kertas Papyrus.',
            'penulis'=>'Septadi'
        ]);  
    }
}