<?php

use Illuminate\Database\Seeder;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tuga=[
        ['NIS'=>'161710118','Nama_Siswa'=>'Laela maharani','Tempat_Lahir'=>'Bandung','Tanggal_Lahir'=>'2001-11-08','Alamat'=>'jln.sayuran','Cita_cita'=>'dokter','Hobi'=>'membaca']
        
        ];
        DB::table('latihans')->insert($tuga);
    }
}
