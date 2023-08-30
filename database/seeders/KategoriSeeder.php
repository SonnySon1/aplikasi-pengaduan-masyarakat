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
            'deskripsi'     =>'Deskripsi Tentang kategori yang berkaitan dengan infrastruktur'
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
