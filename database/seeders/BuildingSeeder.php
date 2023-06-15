<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ruta de la imagen a cargar
        $imagePath = resource_path('images/example.jpg');

        // Leer el contenido de la imagen
        $imageContent = file_get_contents($imagePath);

        // Insertar registros con la misma imagen
        $buildings = [
            [
                'letter' => 'A',
                'name' => 'Direccion general',
                'common_name' => 'Servicios escolares',
                'description' => 'Aqui se encuentra la direccion general, el area de servicios escolares y el departamento de recursos humanos.',
                'references' => 'Es el primer edificio a la derecha desde la entrada del instituto.',
                'top' => '64.5',
                'left' => '58.95',
                'width' => '6.00',
                'height' => '5.80',
                'image' => $imageContent,
            ],
            [
                'letter' => 'B',
                'name' => 'Recursos financieros',
                'description' => 'Aqui se encuentra el area relacionada a pagos y financiamiento del instituto.',
                'references' => 'se encuentra seguido del edificio A en direccion derecha del mismo.',
                'top' => '64.5',
                'left' => '66.15',
                'width' => '3.80',
                'height' => '5.80',
                'image' => $imageContent,
            ],
            [
                'letter' => 'C',
                'name' => 'Centro de informacion',
                'common_name' => 'Biblioteca',
                'description' => 'Aqui se encuentra la biblioteca.',
                'references' => 'se encuentra enfrente de el edifico A es el segundo edificio yendo hacia el frente desde la entrada.',
                'top' => '55.30',
                'left' => '58.95',
                'width' => '8.50',
                'height' => '6.00',
                'image' => $imageContent,
            ],
            [
                'letter' => 'D',
                'name' => 'Tecnologias de informacion',
                'common_name' => 'Laboratorios',
                'description' => 'En este edificio se encuentra el area de tecnologias de informacion asi como los laboratorios de computo del instituto.',
                'references' => 'Es el primer edificio hacia la izquierda desde la entrada.',
                'top' => '59.00',
                'left' => '42.20',
                'width' => '9.25',
                'height' => '6.00',
                'image' => $imageContent,
            ],
            [
                'letter' => 'E',
                'name' => 'Taller de usos multiples',
                'description' => 'En este edificio se encuentra las maquinas grandes del instituto.',
                'references' => 'Este se encuentra enfrente del edificio D y es el segundo edificio a la izquierda de frente desde la entrada.',
                'top' => '48.50',
                'left' => '43.50',
                'width' => '8.00',
                'height' => '7.00',
                'image' => $imageContent,
            ],
            [
                'letter' => 'F',
                'name' => 'Aulas de lenguas extranjeras',
                'common_name' => 'Salones de ingles',
                'description' => 'En este edificio se encuentran los salones en donde se imparten las clases de ingles.',
                'references' => 'Este se encuentra a la izquierda del edificio E',
                'top' => '49.80',
                'left' => '33.05',
                'width' => '8.50',
                'height' => '6.00',
                'image' => $imageContent,
            ],
            [
                'letter' => 'G',
                'name' => 'Sala de usos multiples',
                'description' => 'Edificio en donde se realizan algunas juntas y reparticion de cosas, como uniformes',
                'references' => 'Es el tercer edificio a la izquierda de frente desde la entrada.',
                'top' => '39.20',
                'left' => '49.30',
                'width' => '3.50',
                'height' => '5.60',
                'image' => $imageContent,
            ],
            [
                'letter' => 'H',
                'name' => 'Laboratorio CNC',
                'description' => 'En este edificio se encuentra el salon de bordado y el laboratorio CNC asi como algunas aulas.',
                'references' => 'Se encuentra a la izquierda del edificio G',
                'top' => '39.20',
                'left' => '38.90',
                'width' => '6.80',
                'height' => '5.80',
                'image' => $imageContent,
            ],
            [
                'letter' => 'I',
                'name' => 'Cancha mixta',
                'common_name' => 'Canchas',
                'description' => 'Es el area donde estan la cancha multiple y el campo de beisbol',
                'references' => 'Esta area se encuentra mas a la derecha del instituto a la derecha del edificio C.',
                'top' => '40.00',
                'left' => '73.00',
                'width' => '15.00',
                'height' => '10.00',
                'image' => $imageContent,
            ],
            [
                'letter' => 'J',
                'name' => 'Casetas de servicios generales',
                'common_name' => 'Servicios generales',
                'description' => 'En este edificio se encuentra el almacen de recursos materiales.',
                'references' => 'Se encuentra directamente a la izquierda de la entrada.',
                'top' => '92.00',
                'left' => '41.60',
                'width' => '5.60',
                'height' => '5.50',
                'image' => $imageContent,
            ],
            [
                'letter' => 'K',
                'name' => 'Auditorio principal',
                'common_name' => 'Auditorio magno',
                'description' => 'En este edificio se encuentra el auditorio principal donde se realizan conferencias con mas alumnos.',
                'references' => 'Es el edificio que se encuentra exactamente al frente de la entrada y a la derecha del edificio G.',
                'top' => '31.50',
                'left' => '53.60',
                'width' => '3.80',
                'height' => '13.80',
                'image' => $imageContent,
            ],
            [
                'letter' => 'L',
                'name' => 'Academias II e IEM',
                'common_name' => 'Edificio de industrial',
                'description' => 'En este edificio se encuentran las carreras de II e IEM, ademas de la subdireccion de planeacion.',
                'references' => 'Se encuentra a la derecha del edificio F',
                'top' => '52.40',
                'left' => '22.50',
                'width' => '7.90',
                'height' => '14.40',
                'image' => $imageContent,
            ],
            [
                'letter' => 'M',
                'name' => 'Academias ISC, IER e IE',
                'common_name' => 'Edificio de sistemas',
                'description' => 'En este edificio se encuentran las carreras de ISC, IER e IE asi como tambien el auditorio M',
                'references' => 'Se encuentra a la izquierda del edificio H.',
                'top' => '29.50',
                'left' => '22.50',
                'width' => '7.80',
                'height' => '13.12',
                'image' => $imageContent,
            ],
            [
                'letter' => 'N',
                'name' => 'Laboratorio de electromecanica',
                'description' => 'En este edificio se encuentran laboratorios para hacer practicas.',
                'references' => 'se encuentra a la izquierda del edificio M.',
                'top' => '29.10',
                'left' => '12.40',
                'width' => '6.60',
                'height' => '14.00',
                'image' => $imageContent,
            ],
            // Agrega más registros según sea necesario
        ];

        // Insertar los registros en la base de datos
        foreach ($buildings as $building) {
            DB::table('buildings')->insert($building);
        }
    }
}
