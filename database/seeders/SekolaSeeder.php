<?php

namespace Database\Seeders;

use App\Models\Sekola;
use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sekola ::insert(
            [
                'nama' => 'SMKAssalaam',
                'alamat' => 'JL.cibaduyut',
                'email' => 'Smkasslaam@gmail.com',
                'telepon' => '0831253257',
                'status' => 'Active',
            ]
            );
            Sekola ::insert(
                [
                    'nama' => 'Smk Assalaam',
                    'alamat' => 'JL.cibaduyut',
                    'email' => 'Smaasslaam@gmail.com',
                    'telepon' => '0831253286',
                    'status' => 'Active',
                ]
                );
                Sekola::insert(
                    [
                        'nama' => 'Sma Assalaam',
                        'alamat' => 'JL cibaduyut',
                        'email' => 'Smaasslaam@gmail.com',
                        'telepon' => '0831253254',
                        'status' => 'Active',
                    ]
                    ); 
                    Sekola ::insert(
                        [
                            'nama' => 'Smp sirna miskin',
                            'alamat' => 'JL.cibaduyutlama',
                            'email' => 'Smaasslaam@gmail.com',
                            'telepon' => '0831253297',
                            'status' => 'Active',
                    ]
                    ); 
                    Sekola ::insert(
                        [
                            'nama' => 'Sma nurul iman',
                            'alamat' => 'JL cibaduyut',
                            'email' => 'Smaasslaam@gmail.com',
                            'telepon' => '0831253242',
                            'status' => 'Active',
                    ]
                    );        
                    Sekola ::insert(
                        [
                            'nama' => 'SmaAssalaam',
                            'alamat' => 'JL cibaduyut',
                            'email' => 'Smaasslaam@gmail.com',
                            'telepon' => '083125394',
                            'status' => 'Active',
                    ]
                    );  
                    Sekola ::insert(
                        [
                            'nama' => 'SmaAssalaam',
                            'alamat' => 'JL cibaduyut',
                            'email' => 'Smaasslaam@gmail.com',
                            'telepon' => '0831253286',
                            'status' => 'Active',
                        ]    
                        );  
                        Sekola ::insert(
                            [
                                'nama' => 'Mts Nurul Iman',
                                'alamat' => 'JL cibaduyut',
                                'email' => 'Smaasslaam@gmail.com',
                                'telepon' => '0831253286',
                                'status' => 'Active',
                        ]    
                        );  
                        Sekola ::insert(
                            [
                                'nama' => 'Smk Angkasa',
                                'alamat' => 'JL.margahyu',
                                'email' => 'Smkangkasa@gmail.com',
                                'telepon' => '0831253286',
                                'status' => 'Active',
                                ]    
                        );  
                        Sekola ::insert(
                            [
                                'nama' => 'Smk Margahayu',
                                'alamat' => 'JL.margahyu',
                                'email' => 'Smkmargahyu@gmail.com',
                                'telepon' => '083125328',
                                'status' => 'Active', 
                                ]
                                );           
    
    
    }
}
