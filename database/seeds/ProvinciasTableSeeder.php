<?php

use Carbon\Carbon;
use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $connection = config('database.default');

        if ($connection == 'sqlsrv') {
            DB::statement('SET IDENTITY_INSERT provincias ON');
        }

        Provincia::create([
                    'id' => 1,
                    'nombre' => 'Arica',
                    'region_id'=> 15,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        Provincia::create([
                    'id' => 2,
                    'nombre' => 'Parinacota',
                    'region_id'=> 15,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 3,
                    'nombre' => 'Iquique',
                    'region_id'=> 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 4,
                    'nombre' => 'Tamarugal',
                    'region_id'=> 1,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 5,
                    'nombre' => 'Antofagasta',
                    'region_id'=> 2,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 6,
                    'nombre' => 'El Loa',
                    'region_id'=> 2,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 7,
                    'nombre' => 'Tocopilla',
                    'region_id'=> 2,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 8,
                    'nombre' => 'Copiapó',
                    'region_id'=> 3,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 9,
                    'nombre' => 'Chañaral',
                    'region_id'=> 3,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 10,
                    'nombre' => 'Huasco',
                    'region_id'=> 3,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 11,
                    'nombre' => 'Elqui',
                    'region_id'=> 4,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 12,
                    'nombre' => 'Choapa',
                    'region_id'=> 4,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 13,
                    'nombre' => 'Limarí',
                    'region_id'=> 4,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 14,
                    'nombre' => 'Valparaíso',
                    'region_id'=> 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 15,
                    'nombre' => 'Isla de Pascua',
                    'region_id'=> 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 16,
                    'nombre' => 'Los Andes',
                    'region_id'=> 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 17,
                    'nombre' => 'Petorca',
                    'region_id'=> 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 18,
                    'nombre' => 'Quillota',
                    'region_id'=> 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 19,
                    'nombre' => 'San Antonio',
                    'region_id'=> 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 20,
                    'nombre' => 'San Felipe de Aconcagua',
                    'region_id'=> 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 21,
                    'nombre' => 'Marga Marga',
                    'region_id'=> 5,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 22,
                    'nombre' => 'Cachapoal',
                    'region_id'=> 6,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 23,
                    'nombre' => 'Cardenal Caro',
                    'region_id'=> 6,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 24,
                    'nombre' => 'Colchagua',
                    'region_id'=> 6,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 25,
                    'nombre' => 'Talca',
                    'region_id'=> 7,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 26,
                    'nombre' => 'Cauquenes',
                    'region_id'=> 7,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 27,
                    'nombre' => 'Curicó',
                    'region_id'=> 7,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 28,
                    'nombre' => 'Linares',
                    'region_id'=> 7,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 29,
                    'nombre' => 'Concepción',
                    'region_id'=> 8,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 30,
                    'nombre' => 'Arauco',
                    'region_id'=> 8,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 31,
                    'nombre' => 'Biobío',
                    'region_id'=> 8,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 32,
                    'nombre' => 'Ñuble',
                    'region_id'=> 8,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 33,
                    'nombre' => 'Cautín',
                    'region_id'=> 9,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 34,
                    'nombre' => 'Malleco',
                    'region_id'=> 9,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 35,
                    'nombre' => 'Valdivia',
                    'region_id'=> 14,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 36,
                    'nombre' => 'Ranco',
                    'region_id'=> 14,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 37,
                    'nombre' => 'Llanquihue',
                    'region_id'=> 10,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 38,
                    'nombre' => 'Chiloé',
                    'region_id'=> 10,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 39,
                    'nombre' => 'Osorno',
                    'region_id'=> 10,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 40,
                    'nombre' => 'Palena',
                    'region_id'=> 10,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 41,
                    'nombre' => 'Coihaique',
                    'region_id'=> 11,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 42,
                    'nombre' => 'Aisén',
                    'region_id'=> 11,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 43,
                    'nombre' => 'Capitán Prat',
                    'region_id'=> 11,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 44,
                    'nombre' => 'General Carrera',
                    'region_id'=> 11,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 45,
                    'nombre' => 'Magallanes',
                    'region_id'=> 12,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 46,
                    'nombre' => 'Antártica Chilena',
                    'region_id'=> 12,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 47,
                    'nombre' => 'Tierra del Fuego',
                    'region_id'=> 12,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 48,
                    'nombre' => 'Última Esperanza',
                    'region_id'=> 12,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 49,
                    'nombre' => 'Santiago',
                    'region_id'=> 13,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 50,
                    'nombre' => 'Cordillera',
                    'region_id'=> 13,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 51,
                    'nombre' => 'Chacabuco',
                    'region_id'=> 13,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 52,
                    'nombre' => 'Maipo',
                    'region_id'=> 13,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 53,
                    'nombre' => 'Melipilla',
                    'region_id'=> 13,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
        Provincia::create([
                    'id' => 54,
                    'nombre' => 'Talagante',
                    'region_id'=> 13,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);

        if ($connection == 'sqlsrv') {
            DB::statement('SET IDENTITY_INSERT provincias OFF');
        }
    }
}
