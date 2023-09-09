<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'kategori'      =>'Infrastruktur',
            'deskripsi'     =>'<p><strong>Seuah Kategori yang Bersangkutan dengan infrastruktur adalah</strong></p>
                                <ol>
                                    <li><strong>Transportasi:</strong> Kategori ini mencakup infrastruktur yang terkait dengan transportasi, seperti jalan raya, jembatan, bandara, pelabuhan, stasiun kereta, dan sistem transportasi umum.</li>
                                    <li><strong>Energi:</strong> Kategori ini mencakup infrastruktur yang berhubungan dengan penyediaan energi, seperti pembangkit listrik, jaringan distribusi listrik, pipa gas, dan fasilitas penyimpanan energi.</li>
                                    <li><strong>Telekomunikasi:</strong> Kategori ini mencakup infrastruktur yang terkait dengan komunikasi, seperti jaringan telepon, jaringan internet, dan menara pemancar.</li>
                                    <li><strong>Pendidikan:</strong> Infrastruktur pendidikan meliputi sekolah, perguruan tinggi, perpustakaan, laboratorium, dan fasilitas lain yang mendukung sistem pendidikan.</li>
                                </ol>'
        ]);
        
        Kategori::create([
            'kategori'      => 'Kekerasan',
            'deskripsi'     => '<p><strong>Seuah Kategori yang Bersangkutan dengan kekerasan adalah</strong></p>
                                <ol>
                                    <li><strong>Kekerasan fisik:</strong> Ini mencakup tindakan seperti pemukulan, pemerkosaan, perampokan, atau penganiayaan fisik lainnya.</li>
                                    <li><strong>Kekerasan verbal:</strong> Ini melibatkan penggunaan kata-kata kasar, ancaman, atau pelecehan verbal untuk menyakiti atau merendahkan orang lain.</li>
                                    <li><strong>Kekerasan psikologis:</strong> Ini bisa berupa pengucilan sosial, penghinaan, atau manipulasi emosional yang bertujuan untuk merugikan kesejahteraan mental seseorang.</li>
                                    <li><strong>Kekerasan dalam hubungan:</strong> Ini termasuk kekerasan dalam hubungan pacaran, kekerasan dalam rumah tangga, atau kekerasan dalam hubungan keluarga.</li>
                                    <li><strong>Kekerasan di masyarakat:</strong> Ini bisa berupa kerusuhan, tindakan terorisme, atau gangguan keamanan masyarakat lainnya.</li>
                                </ol>'
        ]);
    }
}
