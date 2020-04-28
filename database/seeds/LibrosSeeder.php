<?php

use Illuminate\Database\Seeder;
use App\Libro;
use Illuminate\Http\Request;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros = [
            [
                'titulo' => 'LOS SECRETOS DE LAS CATEDRALES',
                'autor' => 'MARIANO F. URRESTI',
                'fecha_publicacion' => '08/06/2012',
                'editorial' => 'DE VECCHI',
                'resumen' => 'Esta obra, escrita por un especilista en la historia de la Edad Media y en estudios esotéricos, traza para nosotros la epopeya de la construcción de las catedrales y nos da la clave de sus referencias simbólicas y mágicas. Esta apasionante guía, que constituye tanto una introducción a la historia europea como un estudio sobre la religión y el esoterismo medieval, nos permitirá también visitar a nuestro ritmo las más hermosas catedrales de Europa.',
                'paginas' => '337',
                'precio' => '500',
                'genero' => 'Filosofia',
                'imagen' => 'https://pictures.abebooks.com/ASILODELLIBRO/md/md30558514253.jpg',
            ],
            [
                'titulo' => 'LOS SECRETOS DE LAS CATEDRALES',
                'autor' => 'MARIANO F. URRESTI',
                'fecha_publicacion' => '08/06/2012',
                'editorial' => 'DE VECCHI',
                'resumen' => 'Esta obra, escrita por un especilista en la historia de la Edad Media y en estudios esotéricos, traza para nosotros la epopeya de la construcción de las catedrales y nos da la clave de sus referencias simbólicas y mágicas. Esta apasionante guía, que constituye tanto una introducción a la historia europea como un estudio sobre la religión y el esoterismo medieval, nos permitirá también visitar a nuestro ritmo las más hermosas catedrales de Europa.',
                'paginas' => '337',
                'precio' => '500',
                'genero' => 'Filosofia',
                'imagen' => 'https://pictures.abebooks.com/ASILODELLIBRO/md/md30558514253.jpg',
            ],
            [
                'titulo' => 'LOS SECRETOS DE LAS CATEDRALES',
                'autor' => 'MARIANO F. URRESTI',
                'fecha_publicacion' => '08/06/2012',
                'editorial' => 'DE VECCHI',
                'resumen' => 'Esta obra, escrita por un especilista en la historia de la Edad Media y en estudios esotéricos, traza para nosotros la epopeya de la construcción de las catedrales y nos da la clave de sus referencias simbólicas y mágicas. Esta apasionante guía, que constituye tanto una introducción a la historia europea como un estudio sobre la religión y el esoterismo medieval, nos permitirá también visitar a nuestro ritmo las más hermosas catedrales de Europa.',
                'paginas' => '337',
                'precio' => '500',
                'genero' => 'Filosofia',
                'imagen' => 'https://pictures.abebooks.com/ASILODELLIBRO/md/md30558514253.jpg',
            ],
            [
                'titulo' => 'LOS SECRETOS DE LAS CATEDRALES',
                'autor' => 'MARIANO F. URRESTI',
                'fecha_publicacion' => '08/06/2012',
                'editorial' => 'DE VECCHI',
                'resumen' => 'Esta obra, escrita por un especilista en la historia de la Edad Media y en estudios esotéricos, traza para nosotros la epopeya de la construcción de las catedrales y nos da la clave de sus referencias simbólicas y mágicas. Esta apasionante guía, que constituye tanto una introducción a la historia europea como un estudio sobre la religión y el esoterismo medieval, nos permitirá también visitar a nuestro ritmo las más hermosas catedrales de Europa.',
                'paginas' => '337',
                'precio' => '500',
                'genero' => 'Filosofia',
                'imagen' => 'https://pictures.abebooks.com/ASILODELLIBRO/md/md30558514253.jpg',
            ],
            [
                'titulo' => 'LOS SECRETOS DE LAS CATEDRALES',
                'autor' => 'MARIANO F. URRESTI',
                'fecha_publicacion' => '08/06/2012',
                'editorial' => 'DE VECCHI',
                'resumen' => 'Esta obra, escrita por un especilista en la historia de la Edad Media y en estudios esotéricos, traza para nosotros la epopeya de la construcción de las catedrales y nos da la clave de sus referencias simbólicas y mágicas. Esta apasionante guía, que constituye tanto una introducción a la historia europea como un estudio sobre la religión y el esoterismo medieval, nos permitirá también visitar a nuestro ritmo las más hermosas catedrales de Europa.',
                'paginas' => '337',
                'precio' => '500',
                'genero' => 'Filosofia',
                'imagen' => 'https://pictures.abebooks.com/ASILODELLIBRO/md/md30558514253.jpg',
            ],
            [
                'titulo' => 'LOS SECRETOS DE LAS CATEDRALES',
                'autor' => 'MARIANO F. URRESTI',
                'fecha_publicacion' => '08/06/2012',
                'editorial' => 'DE VECCHI',
                'resumen' => 'Esta obra, escrita por un especilista en la historia de la Edad Media y en estudios esotéricos, traza para nosotros la epopeya de la construcción de las catedrales y nos da la clave de sus referencias simbólicas y mágicas. Esta apasionante guía, que constituye tanto una introducción a la historia europea como un estudio sobre la religión y el esoterismo medieval, nos permitirá también visitar a nuestro ritmo las más hermosas catedrales de Europa.',
                'paginas' => '337',
                'precio' => '500',
                'genero' => 'Filosofia',
                'imagen' => 'https://pictures.abebooks.com/ASILODELLIBRO/md/md30558514253.jpg',
            ],
            [
                'titulo' => 'LOS SECRETOS DE LAS CATEDRALES',
                'autor' => 'MARIANO F. URRESTI',
                'fecha_publicacion' => '08/06/2012',
                'editorial' => 'DE VECCHI',
                'resumen' => 'Esta obra, escrita por un especilista en la historia de la Edad Media y en estudios esotéricos, traza para nosotros la epopeya de la construcción de las catedrales y nos da la clave de sus referencias simbólicas y mágicas. Esta apasionante guía, que constituye tanto una introducción a la historia europea como un estudio sobre la religión y el esoterismo medieval, nos permitirá también visitar a nuestro ritmo las más hermosas catedrales de Europa.',
                'paginas' => '337',
                'precio' => '500',
                'genero' => 'Filosofia',
                'imagen' => 'https://pictures.abebooks.com/ASILODELLIBRO/md/md30558514253.jpg',
            ],
            [
                'titulo' => 'LOS SECRETOS DE LAS CATEDRALES',
                'autor' => 'MARIANO F. URRESTI',
                'fecha_publicacion' => '08/06/2012',
                'editorial' => 'DE VECCHI',
                'resumen' => 'Esta obra, escrita por un especilista en la historia de la Edad Media y en estudios esotéricos, traza para nosotros la epopeya de la construcción de las catedrales y nos da la clave de sus referencias simbólicas y mágicas. Esta apasionante guía, que constituye tanto una introducción a la historia europea como un estudio sobre la religión y el esoterismo medieval, nos permitirá también visitar a nuestro ritmo las más hermosas catedrales de Europa.',
                'paginas' => '337',
                'precio' => '500',
                'genero' => 'Filosofia',
                'imagen' => 'https://pictures.abebooks.com/ASILODELLIBRO/md/md30558514253.jpg',
            ],
            [
                'titulo' => 'LOS SECRETOS DE LAS CATEDRALES',
                'autor' => 'MARIANO F. URRESTI',
                'fecha_publicacion' => '08/06/2012',
                'editorial' => 'DE VECCHI',
                'resumen' => 'Esta obra, escrita por un especilista en la historia de la Edad Media y en estudios esotéricos, traza para nosotros la epopeya de la construcción de las catedrales y nos da la clave de sus referencias simbólicas y mágicas. Esta apasionante guía, que constituye tanto una introducción a la historia europea como un estudio sobre la religión y el esoterismo medieval, nos permitirá también visitar a nuestro ritmo las más hermosas catedrales de Europa.',
                'paginas' => '337',
                'precio' => '500',
                'genero' => 'Filosofia',
                'imagen' => 'https://pictures.abebooks.com/ASILODELLIBRO/md/md30558514253.jpg',
            ],
            [
                'titulo' => 'LOS SECRETOS DE LAS CATEDRALES',
                'autor' => 'MARIANO F. URRESTI',
                'fecha_publicacion' => '08/06/2012',
                'editorial' => 'DE VECCHI',
                'resumen' => 'Esta obra, escrita por un especilista en la historia de la Edad Media y en estudios esotéricos, traza para nosotros la epopeya de la construcción de las catedrales y nos da la clave de sus referencias simbólicas y mágicas. Esta apasionante guía, que constituye tanto una introducción a la historia europea como un estudio sobre la religión y el esoterismo medieval, nos permitirá también visitar a nuestro ritmo las más hermosas catedrales de Europa.',
                'paginas' => '337',
                'precio' => '500',
                'genero' => 'Filosofia',
                'imagen' => 'https://pictures.abebooks.com/ASILODELLIBRO/md/md30558514253.jpg',
            ],
        ];

        foreach($libros as $libro) {
            Libro::create($libro);
        }
        
    }
}
