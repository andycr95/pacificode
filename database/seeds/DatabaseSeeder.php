<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Services;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
     /* DB::table('services')->insert([
            'id'=>1,
            'service_name'=>'Desarrollo de aplicaciones moviles',
            'service_photo'=>'https://d1v0hpr0y8vhtu.cloudfront.net/wp-content/uploads/2018/09/creamos-pa%CC%81gina-web-a-medida-1024x689.png',
            'service_extract'=>'Desarrollo y creación de páginas web a medida.
                                Empresa para crear página web a medida sin plantillas.
                                Disponemos de diseñadores web para personalizar el diseño
                                de tu página web totalmente personalizada en Bootstrap.
                                Páginas web construidas en HTML, css, sass y javascript.',
            'service_body'=>'Para diseñar una página web para mi empresa a medida y una aplicación móvil, necesitas una sistema multiplataforma. En nuestra empresa utilizamos Bootstrap, Ionic, React Native y Flutter, los mejores sistemas que existen actualmente para desarrolladores. Bootstrap facilitará el trabajo, con ella podrás construir los tres puntos claves para crear tu web:

                                Estructura: necesitas una página en HTML, a ser posible html 5 para darle forma a la estructura de tu web.
                                Estilos: las hojas de estilos, marcadas con css, visualizarán en diseño de tus páginas haciendo tu web más visual y atractiva.
                                Funciones: la forma de interaccionar con el usuario tendrá que ir montado con los archivos de las funciones en javascript.
                                Una vez tengas los tres puntos estudiados, solo falta enlazar cada una de las hojas.',
            'category_id'=>1



        ]);

        DB::table('services')->insert([
            'id'=>2,
            'service_name'=>'Diseño web ',
            'service_photo'=>'https://d1v0hpr0y8vhtu.cloudfront.net/wp-content/uploads/2018/09/creamos-pa%CC%81gina-web-a-medida-1024x689.png',
            'service_extract'=>'Diseño y creación de sitios web a medida. diseño
                                de tu página web totalmente personalizada en Bootstrap.
                                Páginas web construidas en HTML, css, sass y javascript yotalmente resposive.',
            'service_body'=>'Nuestro equipo de profesionales lo ayudará a encontrar la
                                mejor opción para implementar su sitio web, en plataformas
                                de contenido dinámico para lograr una presencia profesional y efectiva en la red.',
                               
            'category_id'=>1



        ]);


         DB::table('services')->insert([
            'id'=>3,
            'service_name'=>'Ddesarrollo web',
            'service_photo'=>'https://d1v0hpr0y8vhtu.cloudfront.net/wp-content/uploads/2018/09/creamos-pa%CC%81gina-web-a-medida-1024x689.png',
            'service_extract'=>'Desarrollamos sitios web que cumplen con las necesidades de su empresa
                              generando un alto grado de competitividad.',
            'service_body'=>'Creamos sitios web 100% administrables, hechos a la medida, que no solo llaman la
                               atención, sino que le ayudarán a su negocio a convertir a visitantes en clientes.
                               Le garantizamos un alto nivel de competitividad y reconocimiento en en el torno que se desarrolle su empresa..',
            'category_id'=>1



        ]);



        DB::table('services')->insert([
            'id'=>4,
            'service_name'=>'Hosting y dominio',
            'service_photo'=>'https://d1v0hpr0y8vhtu.cloudfront.net/wp-content/uploads/2018/09/creamos-pa%CC%81gina-web-a-medida-1024x689.png',
            'service_extract'=>'Alojamos tu sitio web con la mas alta calidad con los mejores proveedores, disfrutar de tu nombre en internet.',
            'service_body'=>'Hospedamos su sitio web o aplicación en la nube, sobre los proveedores más confiable. Contamos con planes de hosting que
                             se adaptan a las necesidades de su empresa. Garantizando seguridad y confiabilidad de su información.',
            'category_id'=>1



        ]);



        DB::table('services')->insert([
            'id'=>5,
            'service_name'=>'Soporte tecnico',
            'service_photo'=>'https://d1v0hpr0y8vhtu.cloudfront.net/wp-content/uploads/2018/09/creamos-pa%CC%81gina-web-a-medida-1024x689.png',
            'service_extract'=>'Brindamos soporte tecnico a sus equipos de operacion para optimizar sus serviciosñ.',
            'service_body'=>'Mantenimiento preventivo y soporte correctivo de sus computadoras y servidores. Reparamos todos los sistemas operativos. 
             Soporte técnico de PC, Mac y Linux. Limpieza fisica de computadoras y componentes.',
            
             'category_id'=>1 



        ]);

            */
      


        DB::table('users')->insert([
            'id'=>1,
            'name'=>'Henry Stivent',
            'email'=>'henrystiven7@pacificode.co',
            'password'=>Hash::make('123456'),
            'remember_token'=>'123456',
            'created_at'=>'03-03-20',
            'updated_at'=>'03-03-20',
            'gender'=>'1',
            'state'=>'1',
            'birth_date'=>'12-02-02',
            'position'=>'desarrollador front-end',
            'marital_status'=>'1',
            'address'=>'carmelita por la linea',
            'phone'=>'3188027594',
            'twitter'=>'https://www.twitter.com/HenryRos7',
            'facebook'=>'https://www.facebook.com/henrypes',
            'linkedin'=>'https://www.linkedin.com/in/henry-ramirez-178a1415b/'
        ]);
    }
}
