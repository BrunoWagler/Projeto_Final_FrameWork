<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert(

            [


                [
                    'Nome' => 'Bruno',
                    'Email' => 'exemplo@email.com',
                    'Telefone' => 13232112,
                    'Data_Cadastro' => '2025-02-01',
                    'Cidade' => 'Corumba'
                ],

                [
                    'Nome' => 'ASA',
                    'Email' => 'exemplo2@email.com',
                    'Telefone' => 1412121,
                    'Data_Cadastro' => '2025-02-11',
                    'Cidade' => 'CAsdd'
                ]
                ,

                [
                    'Nome' => 'Basa',
                    'Email' => 'exemplo3@email.com',
                    'Telefone' => 1412321,
                    'Data_Cadastro' => '2025-02-12',
                    'Cidade' => 'Casa'
                ]

            ]
        );

    }
}
