<?php


namespace Database\Seeders;


use App\Models\Locations\City;
use App\Models\Locations\Country;
use App\Models\Locations\State;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create( [
            'id'          => 1,
            'description' => 'Ecuador',
        ] );
        
        
        State::create( [
            'id'          => 1,
            'description' => 'AZUAY',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 2,
            'description' => 'BOLIVAR',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 3,
            'description' => 'CAÑAR',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 4,
            'description' => 'CARCHI',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 5,
            'description' => 'COTOPAXI',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 6,
            'description' => 'CHIMBORAZO',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 7,
            'description' => 'EL ORO',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 8,
            'description' => 'ESMERALDAS',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 9,
            'description' => 'GUAYAS',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 10,
            'description' => 'IMBABURA',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 11,
            'description' => 'LOJA',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 12,
            'description' => 'LOS RIOS',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 13,
            'description' => 'MANABI',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 14,
            'description' => 'MORONA SANTIAGO',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 15,
            'description' => 'NAPO',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 16,
            'description' => 'PASTAZA',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 17,
            'description' => 'PICHINCHA',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 18,
            'description' => 'TUNGURAHUA',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 19,
            'description' => 'ZAMORA CHINCHIPE',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 20,
            'description' => 'GALAPAGOS',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 21,
            'description' => 'SUCUMBIOS',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 22,
            'description' => 'ORELLANA',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 23,
            'description' => 'SANTO DOMINGO DE LOS TSACHILAS',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 24,
            'description' => 'SANTA ELENA',
            'country_id'  => 1
        ] );
        
        
        State::create( [
            'id'          => 25,
            'description' => 'ZONAS NO DELIMITADAS',
            'country_id'  => 1
        ] );
        
        
        City::create( [
            'id'          => 1,
            'description' => 'CUENCA',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 2,
            'description' => 'GIRÓN',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 3,
            'description' => 'GUALACEO',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 4,
            'description' => 'NABÓN',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 5,
            'description' => 'PAUTE',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 6,
            'description' => 'PUCARA',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 7,
            'description' => 'SAN FERNANDO',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 8,
            'description' => 'SANTA ISABEL',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 9,
            'description' => 'SIGSIG',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 10,
            'description' => 'OÑA',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 11,
            'description' => 'CHORDELEG',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 12,
            'description' => 'EL PAN',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 13,
            'description' => 'SEVILLA DE ORO',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 14,
            'description' => 'GUACHAPALA',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 15,
            'description' => 'CAMILO PONCE ENRÍQUEZ',
            'state_id'    => 1,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 16,
            'description' => 'GUARANDA',
            'state_id'    => 2,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 17,
            'description' => 'CHILLANES',
            'state_id'    => 2,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 18,
            'description' => 'CHIMBO',
            'state_id'    => 2,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 19,
            'description' => 'ECHEANDÍA',
            'state_id'    => 2,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 20,
            'description' => 'SAN MIGUEL',
            'state_id'    => 2,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 21,
            'description' => 'CALUMA',
            'state_id'    => 2,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 22,
            'description' => 'LAS NAVES',
            'state_id'    => 2,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 23,
            'description' => 'AZOGUES',
            'state_id'    => 3,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 24,
            'description' => 'BIBLIÁN',
            'state_id'    => 3,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 25,
            'description' => 'CAÑAR',
            'state_id'    => 3,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 26,
            'description' => 'LA TRONCAL',
            'state_id'    => 3,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 27,
            'description' => 'EL TAMBO',
            'state_id'    => 3,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 28,
            'description' => 'DÉLEG',
            'state_id'    => 3,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 29,
            'description' => 'SUSCAL',
            'state_id'    => 3,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 30,
            'description' => 'TULCÁN',
            'state_id'    => 4,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 31,
            'description' => 'BOLÍVAR',
            'state_id'    => 4,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 32,
            'description' => 'ESPEJO',
            'state_id'    => 4,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 33,
            'description' => 'MIRA',
            'state_id'    => 4,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 34,
            'description' => 'MONTÚFAR',
            'state_id'    => 4,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 35,
            'description' => 'SAN PEDRO DE HUACA',
            'state_id'    => 4,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 36,
            'description' => 'LATACUNGA',
            'state_id'    => 5,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 37,
            'description' => 'LA MANÁ',
            'state_id'    => 5,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 38,
            'description' => 'PANGUA',
            'state_id'    => 5,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 39,
            'description' => 'PUJILI',
            'state_id'    => 5,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 40,
            'description' => 'SALCEDO',
            'state_id'    => 5,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 41,
            'description' => 'SAQUISILÍ',
            'state_id'    => 5,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 42,
            'description' => 'SIGCHOS',
            'state_id'    => 5,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 43,
            'description' => 'RIOBAMBA',
            'state_id'    => 6,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 44,
            'description' => 'ALAUSI',
            'state_id'    => 6,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 45,
            'description' => 'COLTA',
            'state_id'    => 6,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 46,
            'description' => 'CHAMBO',
            'state_id'    => 6,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 47,
            'description' => 'CHUNCHI',
            'state_id'    => 6,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 48,
            'description' => 'GUAMOTE',
            'state_id'    => 6,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 49,
            'description' => 'GUANO',
            'state_id'    => 6,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 50,
            'description' => 'PALLATANGA',
            'state_id'    => 6,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 51,
            'description' => 'PENIPE',
            'state_id'    => 6,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 52,
            'description' => 'CUMANDÁ',
            'state_id'    => 6,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 53,
            'description' => 'MACHALA',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 54,
            'description' => 'ARENILLAS',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 55,
            'description' => 'ATAHUALPA',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 56,
            'description' => 'BALSAS',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 57,
            'description' => 'CHILLA',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 58,
            'description' => 'EL GUABO',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 59,
            'description' => 'HUAQUILLAS',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 60,
            'description' => 'MARCABELÍ',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 61,
            'description' => 'PASAJE',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 62,
            'description' => 'PIÑAS',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 63,
            'description' => 'PORTOVELO',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 64,
            'description' => 'SANTA ROSA',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 65,
            'description' => 'ZARUMA',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 66,
            'description' => 'LAS LAJAS',
            'state_id'    => 7,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 67,
            'description' => 'ESMERALDAS',
            'state_id'    => 8,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 68,
            'description' => 'ELOY ALFARO',
            'state_id'    => 8,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 69,
            'description' => 'MUISNE',
            'state_id'    => 8,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 70,
            'description' => 'QUININDÉ',
            'state_id'    => 8,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 71,
            'description' => 'SAN LORENZO',
            'state_id'    => 8,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 72,
            'description' => 'ATACAMES',
            'state_id'    => 8,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 73,
            'description' => 'RIOVERDE',
            'state_id'    => 8,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 74,
            'description' => 'LA CONCORDIA',
            'state_id'    => 8,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 75,
            'description' => 'GUAYAQUIL',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 76,
            'description' => 'ALFREDO BAQUERIZO MORENO (JUJÁN)',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 77,
            'description' => 'BALAO',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 78,
            'description' => 'BALZAR',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 79,
            'description' => 'COLIMES',
            'state_id'   => 9,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 80,
            'description' => 'DAULE',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 81,
            'description' => 'DURÁN',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 82,
            'description' => 'EL EMPALME',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 83,
            'description' => 'EL TRIUNFO',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 84,
            'description' => 'MILAGRO',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 85,
            'description' => 'NARANJAL',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 86,
            'description' => 'NARANJITO',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 87,
            'description' => 'PALESTINA',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 88,
            'description' => 'PEDRO CARBO',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 89,
            'description' => 'SAMBORONDÓN',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 90,
            'description' => 'SANTA LUCÍA',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 91,
            'description' => 'SALITRE (URBINA JADO)',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 92,
            'description' => 'SAN JACINTO DE YAGUACHI',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 93,
            'description' => 'PLAYAS',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 94,
            'description' => 'SIMÓN BOLÍVAR',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 95,
            'description' => 'CORONEL MARCELINO MARIDUEÑA',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 96,
            'description' => 'LOMAS DE SARGENTILLO',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 97,
            'description' => 'NOBOL',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 98,
            'description' => 'GENERAL ANTONIO ELIZALDE',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 99,
            'description' => 'ISIDRO AYORA',
            'state_id'    => 9,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 100,
            'description' => 'IBARRA',
            'state_id'    => 10,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 101,
            'description' => 'ANTONIO ANTE',
            'state_id'    => 10,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 102,
            'description' => 'COTACACHI',
            'state_id'    => 10,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 103,
            'description' => 'OTAVALO',
            'state_id'    => 10,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 104,
            'description' => 'PIMAMPIRO',
            'state_id'    => 10,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 105,
            'description' => 'SAN MIGUEL DE URCUQUÍ',
            'state_id'    => 10,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 106,
            'description' => 'LOJA',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 107,
            'description' => 'CALVAS',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 108,
            'description' => 'CATAMAYO',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 109,
            'description' => 'CELICA',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 110,
            'description' => 'CHAGUARPAMBA',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 111,
            'description' => 'ESPÍNDOLA',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 112,
            'description' => 'GONZANAMÁ',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 113,
            'description' => 'MACARÁ',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 114,
            'description' => 'PALTAS',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 115,
            'description' => 'PUYANGO',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 116,
            'description' => 'SARAGURO',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 117,
            'description' => 'SOZORANGA',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 118,
            'description' => 'ZAPOTILLO',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 119,
            'description' => 'PINDAL',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 120,
            'description' => 'QUILANGA',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 121,
            'description' => 'OLMEDO',
            'state_id'    => 11,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 122,
            'description' => 'BABAHOYO',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 123,
            'description' => 'BABA',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 124,
            'description' => 'MONTALVO',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 125,
            'description' => 'PUEBLOVIEJO',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 126,
            'description' => 'QUEVEDO',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 127,
            'description' => 'URDANETA',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 128,
            'description' => 'VENTANAS',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 129,
            'description' => 'VÍNCES',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 130,
            'description' => 'PALENQUE',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 131,
            'description' => 'BUENA FÉ',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 132,
            'description' => 'VALENCIA',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 133,
            'description' => 'MOCACHE',
            'state_id'    => 12,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 134,
            'description' => 'QUINSALOMA',
            
            
            'state_id'   => 12,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 135,
            'description' => 'PORTOVIEJO',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 136,
            'description' => 'BOLÍVAR',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 137,
            'description' => 'CHONE',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 138,
            'description' => 'EL CARMEN',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 139,
            'description' => 'FLAVIO ALFARO',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 140,
            'description' => 'JIPIJAPA',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 141,
            'description' => 'JUNÍN',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 142,
            'description' => 'MANTA',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 143,
            'description' => 'MONTECRISTI',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 144,
            'description' => 'PAJÁN',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 145,
            'description' => 'PICHINCHA',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 146,
            'description' => 'ROCAFUERTE',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 147,
            'description' => 'SANTA ANA',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 148,
            'description' => 'SUCRE',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 149,
            'description' => 'TOSAGUA',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 150,
            'description' => '24 DE MAYO',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 151,
            'description' => 'PEDERNALES',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 152,
            'description' => 'OLMEDO',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 153,
            'description' => 'PUERTO LÓPEZ',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 154,
            'description' => 'JAMA',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 155,
            'description' => 'JARAMIJÓ',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 156,
            'description' => 'SAN VICENTE',
            
            
            'state_id'   => 13,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 157,
            'description' => 'MORONA',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 158,
            'description' => 'GUALAQUIZA',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 159,
            'description' => 'LIMÓN INDANZA',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 160,
            'description' => 'PALORA',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 161,
            'description' => 'SANTIAGO',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 162,
            'description' => 'SUCÚA',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 163,
            'description' => 'HUAMBOYA',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 164,
            'description' => 'SAN JUAN BOSCO',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 165,
            'description' => 'TAISHA',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 166,
            'description' => 'LOGROÑO',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 167,
            'description' => 'PABLO SEXTO',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 168,
            'description' => 'TIWINTZA',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 169,
            'description' => 'TENA',
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 170,
            'description' => 'ARCHIDONA',
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 171,
            'description' => 'EL CHACO',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 172,
            'description' => 'QUIJOS',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 173,
            'description' => 'CARLOS JULIO AROSEMENA TOLA',
            
            
            'state_id'   => 14,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 174,
            'description' => 'PASTAZA',
            
            
            'state_id'   => 16,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 175,
            'description' => 'MERA',
            
            
            'state_id'   => 16,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 176,
            'description' => 'SANTA CLARA',
            
            
            'state_id'   => 16,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 177,
            'description' => 'ARAJUNO',
            
            
            'state_id'   => 16,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 178,
            'description' => 'QUITO',
            
            
            'state_id'   => 17,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 179,
            'description' => 'CAYAMBE',
            
            
            'state_id'   => 17,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 180,
            'description' => 'MEJIA',
            
            
            'state_id'   => 17,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 181,
            'description' => 'PEDRO MONCAYO',
            
            
            'state_id'   => 17,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 182,
            'description' => 'RUMIÑAHUI',
            
            
            'state_id'   => 17,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 183,
            'description' => 'SAN MIGUEL DE LOS BANCOS',
            
            
            'state_id'   => 17,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 184,
            'description' => 'PEDRO VICENTE MALDONADO',
            
            
            'state_id'   => 17,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 185,
            'description' => 'PUERTO QUITO',
            
            
            'state_id'   => 17,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 186,
            'description' => 'AMBATO',
            
            
            'state_id'   => 18,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 187,
            'description' => 'BAÑOS DE AGUA SANTA',
            
            
            'state_id'   => 18,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 188,
            'description' => 'CEVALLOS',
            
            
            'state_id'   => 18,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 189,
            'description' => 'MOCHA',
            
            
            'state_id'   => 18,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 190,
            'description' => 'PATATE',
            
            
            'state_id'   => 18,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 191,
            'description' => 'QUERO',
            
            
            'state_id'   => 18,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 192,
            'description' => 'SAN PEDRO DE PELILEO',
            
            
            'state_id'   => 18,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 193,
            'description' => 'SANTIAGO DE PÍLLARO',
            
            
            'state_id'   => 18,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 194,
            'description' => 'TISALEO',
            
            
            'state_id'   => 18,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 195,
            'description' => 'ZAMORA',
            
            
            'state_id'   => 19,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 196,
            'description' => 'CHINCHIPE',
            
            
            'state_id'   => 19,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 197,
            'description' => 'NANGARITZA',
            
            
            'state_id'   => 19,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 198,
            'description' => 'YACUAMBI',
            'state_id'   => 19,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 199,
            'description' => 'YANTZAZA (YANZATZA)',
            'state_id'   => 19,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 200,
            'description' => 'EL PANGUI',
            
            
            'state_id'   => 19,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 201,
            'description' => 'CENTINELA DEL CÓNDOR',
            
            
            'state_id'   => 19,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 202,
            'description' => 'PALANDA',
            
            
            'state_id'   => 19,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 203,
            'description' => 'PAQUISHA',
            
            
            'state_id'   => 19,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 204,
            'description' => 'SAN CRISTÓBAL',
            
            
            'state_id'   => 20,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 205,
            'description' => 'ISABELA',
            
            
            'state_id'   => 20,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 206,
            'description' => 'SANTA CRUZ',
            
            
            'state_id'   => 20,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 207,
            'description' => 'LAGO AGRIO',
            
            
            'state_id'   => 21,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 208,
            'description' => 'GONZALO PIZARRO',
            
            
            'state_id'   => 21,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 209,
            'description' => 'PUTUMAYO',
            
            
            'state_id'   => 21,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 210,
            'description' => 'SHUSHUFINDI',
            
            
            'state_id'   => 21,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 211,
            'description' => 'SUCUMBÍOS',
            
            
            'state_id'   => 21,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 212,
            'description' => 'CASCALES',
            
            
            'state_id'   => 21,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 213,
            'description' => 'CUYABENO',
            
            
            'state_id'   => 21,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 214,
            'description' => 'ORELLANA',
            
            
            'state_id'   => 22,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 215,
            'description' => 'AGUARICO',
            
            
            'state_id'   => 22,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 216,
            'description' => 'LA JOYA DE LOS SACHAS',
            
            
            'state_id'   => 22,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 217,
            'description' => 'LORETO',
            
            
            'state_id'   => 22,
            'created_at' => now(),
            'updated_at' => now()
        ] );
        
        
        City::create( [
            'id'          => 218,
            'description' => 'SANTO DOMINGO',
            'state_id'    => 24,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 219,
            'description' => 'SANTA ELENA',
            'state_id'    => 24,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 220,
            'description' => 'LA LIBERTAD',
            'state_id'    => 24,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 221,
            'description' => 'SALINAS',
            'state_id'    => 24,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 222,
            'description' => 'LAS GOLONDRINAS',
            'state_id'    => 25,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 223,
            'description' => 'MANGA DEL CURA',
            'state_id'    => 25,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
        
        
        City::create( [
            'id'          => 224,
            'description' => 'EL PIEDRERO',
            'state_id'    => 25,
            'created_at'  => now(),
            'updated_at'  => now()
        ] );
    }
}