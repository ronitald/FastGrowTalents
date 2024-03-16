<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipalities = [
            'Amazonas', 'Antioquia', 'Arauca', 'Atlántico', 'Bogotá D.C',
            'Bolívar', 'Boyacá', 'Caldas', 'Caquetá', 'Casanare',
            'Cauca', 'Cesar', 'Chocó', 'Córdoba', 'Cundinamarca',
            'Guainía', 'Guaviare', 'Huila', 'La Guajira', 'Magdalena',
            'Meta', 'Nariño', 'Norte de Santander', 'Putumayo', 'Quindío',
            'Risaralda', 'San Andrés y Providencia', 'Santander', 'Sucre', 
            'Tolima', 'Valle del Cauca', 'Vaupés', 'Vichada'
        ];

        foreach ($municipalities as $municipality) {
            DB::table('municipalities')->insert(['municipality_name' => $municipality]);
        }
    }
}
