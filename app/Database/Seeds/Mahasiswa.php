<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class Mahasiswa extends Seeder
{
    public function run()
    {
        $datamahasiswa = [
            [
                'npm' => '2057051015',
                'nama' => 'Franz Kenzo',
                'alamat' => 'Jakarta',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2057051020',
                'nama' => 'Alex Turner',
                'alamat' => 'Sheffield',
                'created_at' => Time::now()
            ]

        ];

        // Simple Queries (One Data)
        // $this->db->query('INSERT INTO mahasiswa (npm, nama, alamat, created_at) VALUES(:npm:, :nama:, :alamat:, :created_at:)', $data);

        // Using Query Builder
        foreach($datamahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
