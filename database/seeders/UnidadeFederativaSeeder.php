<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadeFederativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('unidades_federativas')->insert(array (
            0 =>
            array (
                'nome' => 'Acre',
                'sigla' => 'AC',
            ),
            1 =>
            array (
                'nome' => 'Alagoas',
                'sigla' => 'AL',
            ),
            2 =>
            array (
                'nome' => 'Amazonas',
                'sigla' => 'AM',
            ),
            3 =>
            array (
                'nome' => 'Amapá',
                'sigla' => 'AP',         
            ),
            4 =>
            array (
                'nome' => 'Bahia',
                'sigla' => 'BA',
            ),
            5 =>
            array (
                'nome' => 'Ceará',
                'sigla' => 'CE',
            ),
            6 =>
            array (
                'nome' => 'Distrito Federal',
                'sigla' => 'DF',
            ),
            7 =>
            array (
                'nome' => 'Espírito Santo',
                'sigla' => 'ES',
            ),
            8 =>
            array (
                'nome' => 'Goiás',
                'sigla' => 'GO',
            ),
            9 =>
            array (
                'nome' => 'Maranhão',
                'sigla' => 'MA',
            ),
            10 =>
            array (
                'nome' => 'Minas Gerais',
                'sigla' => 'MG',
            ),
            11 =>
            array (
                'nome' => 'Mato Grosso do Sul',
                'sigla' => 'MS',
            ),
            12 =>
            array (
                'nome' => 'Mato Grosso',
                'sigla' => 'MT',
            ),
            13 =>
            array (
                'nome' => 'Pará',
                'sigla' => 'PA',
            ),
            14 =>
            array (
                'nome' => 'Paraiba',
                'sigla' => 'PB',
            ),
            15 =>
            array (
                'nome' => 'Pernambuco',
                'sigla' => 'PE',
            ),
            16 =>
            array (
                'nome' => 'Piauí',
                'sigla' => 'PI',
            ),
            17 =>
            array (
                'nome' => 'Paraná',
                'sigla' => 'PR',
            ),
            18 =>
            array (
                'nome' => 'Rio de Janeiro',
                'sigla' => 'RJ',
            ),
            19 =>
            array (
                'nome' => 'Rio Grande do Norte',
                'sigla' => 'RN',
            ),
            20 =>
            array (
                'nome' => 'Rondônia',
                'sigla' => 'RO',
            ),
            21 =>
            array (
                'nome' => 'Roraima',
                'sigla' => 'RR',
            ),
            22 =>
            array (
                'nome' => 'Rio Grande do Sul',
                'sigla' => 'RS',
            ),
            23 =>
            array (
                'nome' => 'Santa Catarina',
                'sigla' => 'SC',
            ),
            24 =>
            array (
                'nome' => 'Sergipe',
                'sigla' => 'SE',
            ),
            25 =>
            array (
                'nome' => 'São Paulo',
                'sigla' => 'SP',
            ),
            26 =>
            array (
                'nome' => 'Tocantins',
                'sigla' => 'TO',
            ),
        ));
    }
}
