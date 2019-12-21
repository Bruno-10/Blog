<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User Seeder
        //Admin
        DB::table('users')->insert([
            'name' => "Bruno",
            'last_name' => "Belucci",
            'username' => 'BrunoBelucci',
            'age' => date('1999-03-11'),
            'email' => 'admin@admin.com',
            'password' => bcrypt('blogRoot'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => "Juan",
            'last_name' => "Gregoret",
            'username' => 'JuanG',
            'age' => date('1999-03-11'),
            'email' => 'juanGregoret@gmail.com',
            'password' => bcrypt('prueba1234'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => "Pedro",
            'last_name' => "Marconi",
            'username' => 'Pedro445',
            'age' => date('1999-03-11'),
            'email' => 'pedroMarconi@gmail.com',
            'password' => bcrypt('prueba1234'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => "Alberto",
            'last_name' => "Escobar",
            'username' => 'Escobar345',
            'age' => date('1999-03-11'),
            'email' => 'AlbertoEscobar@gmail.com',
            'password' => bcrypt('prueba1234'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Comments Seeder
        DB::table('comments')->insert([
            'comment' => "Buen post!",
            'post_id' => 1,
            'user_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('comments')->insert([
            'comment' => "Justo lo que buscaba!",
            'post_id' => 2,
            'user_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('comments')->insert([
            'comment' => "+10 Maquina",
            'post_id' => 1,
            'user_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        //Categorias Seeder
        DB::table('categorias')->insert([
            'nombre' => "Computadoras",
        ]);
        DB::table('categorias')->insert([
            'nombre' => "Celulares",
        ]);
        DB::table('categorias')->insert([
            'nombre' => "Monitores",
        ]);
        //Posts Seeder
         DB::table('posts')->insert([
            'title' => "La historia de la generación de las computadoras",
            'content' => 
            "Desde ordenadores carentes de sistema operativo, construidos con electrónicas de válvulas, pasando por transistores hasta llegar a microprocesadores, son solo algunas de las características que destacan a cada generación de computadoras. Pero, ¿cómo eran esas primeras máquinas y para qué eran utilizadas? ¡Echemos un vistazo atrás para entender mejor todo esto!
            1° Generación de computadoras – 1946 a 1955: para esta época, la tecnología utilizada eran los tubos al vacío, esos mismos son famosos por haber posibilitado el desarrollo de la electrónica hacia la mitad del siglo XX. Por esta razón, los ordenadores eran desarrollados con válvulas electrónicas de vacío. Se caracterizaban principalmente por tener un tamaño enorme, no disponer de sistema operativo, sino de una tarjeta perforada para almacenar toda la información y eran utilizados exclusivamente por las fuerzas militares y la industria científica. 
            2° Generación de computadoras – 1958 a 1964: La gran hazaña de esta generación fue la sustitución de válvulas de vacío por los transistores, acompañada del uso de memorias de núcleo de ferritas y tambores magnéticos para almacenar la información, los cuales permitieron la fabricación de computadoras de menor tamaño, caracterizadas por una mejor potencia, rapidez y fiabilidad. En este periodo se empezaron a utilizar lenguajes de alto nivel como ALGOL, FORTRAN y COBOL, siendo estos dos últimos los lenguajes de programación que ayudó a desarrollar la gran científica de la computación Grace Hopper, gracias a sus conocimientos sobre FLOW-MATIC.3° Generación de computadoras – 1964 a 1971: Con la invención del circuito cerrado o chip por parte de los ingenieros estadounidenses Jack S. Kilby y Robert Noyce se revoluciona por completo el diseño de las computadoras. Aparecen los primeros discos magnéticos y los componentes electrónicos se integran en una sola pieza o chip que albergan en su interior condensadores, transistores y diodos, los cuales ayudan a aumentar notablemente la velocidad de carga y a reducir el consumo de energía eléctrica. En esta generación las computadoras se caracterizan por tener mayor flexibilidad y fiabilidad, ser de menor tamaño y ocupar poco espacio. 
            4° Generación de computadoras – 1971 a 1981: A partir de esta etapa las computadoras personales se convierten en las protagonistas de la informática. Todos los elementos que conforman la CPU ahora se almacenan en un circuito integrado conocido como microprocesadores y empiezan a surgir una gran gama de estos elementos fabricados por la compañía Intel, reconocida en la actualidad como la mayor fabricante de circuitos integrados del mundo. El primer microprocesador denominado 4004 lo desarrolla Intel en 1971 y en 1974 se presenta al mercado el primero diseñado para uso general. Es en esta generación donde aparece el disquete.
            5° Generación de computadoras – 1982 a 1989: Dos hechos históricos marcan el inicio de esta etapa. Por un lado el proyecto 5ta generación comando por Japón en 1982, cuya finalidad principal era construir ordenadores con tecnología más avanzada bajo lenguajes de programación más potentes para las máquinas y menos complejos para los usuarios. Por otro, la construcción del primer superordenador con capacidad de proceso paralelo por parte de Seymour Cray y su compañía Control Data Corporation denominado CDC 6600. En esta generación las computadoras empiezan a realizar tareas que aún en la actualidad predominan, como la traducción automática de una lengua a otra. Asimismo, el almacenamiento de información digital se procesa en gigabytes y surge el DVD.
            6° Generación de computadoras – 1990 hasta la actualidad: Aunque se presentan algunos desacuerdos sobre la existencia de una 6ta generación de computadoras, lo cierto es que la informática no se ha detenido y cada día avanza a mayor escala. La inteligencia artificial, la arquitectura vectorial y paralela de los ordenadores y la incorporación de chips de procesadores especializados para llevar a cabo ciertas tareas, predominan en la actualidad. Sin embargo, aún queda un largo camino por recorrer para la tecnología digital y de acuerdo con expertos de la industria como el gran Stephen Hawking, la próxima generación estará marcada por el máximo desarrollo de la informática cuántica y su puesta en marcha.",
            'shortContent'=> "Desde ordenadores carentes de sistema operativo, construidos con electrónicas de válvulas, pasando por transistores hasta llegar a microprocesadores, son solo algunas de las características que destacan a cada generación de computadoras. Pero, ¿cómo eran esas primeras máquinas y para qué eran utilizadas? ¡Echemos un vistazo atrás para entender mejor todo esto!",
            'categoria_id' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('posts')->insert([
            'title' => "Lo que debes saber antes de comprar un monitor de PC.",
            'content' => "
            Como sucede con todos los periféricos, existen monitores con distintas especificaciones que se han de valorar antes de decantarse por adquirir un modelo u otro… pero como sé que hay mucha gente que las desconoce o no les da la importancia que tienen, he pensado que sería bueno escribir un post con el que ayudar a la hora de tomar una decisión.
            Lo importante (y lo que quiero que sepas) es que conozcas cuáles son las especificaciones principales que hay que tener en cuenta a la hora de elegir uno, que son:
                * Retroilumación LED ya que tienen menor consumo eléctrico.
                Para que veas que realmente es un aspecto a tener en cuenta te diré que mi anterior monitor (un Philips 200W6CS de 20 pulgadas LCD) tenía un consumo de 50W, mientras que el que tengo ahora (Philips 247E6QDSD de 24 pulgadas) tiene un consumo máximo de tan sólo 24W (¡sí, la mitad aún a pesar de ser más grande!)
                * Panel IPS o VA (o alguno de sus correspondientes subtipos).
                Básicamente los monitores se montan desde hace años con uno de los siguientes  tipos de paneles: TN (los más económicos y comunes), IPS y en menor medida VA.
                Los paneles TN (Twisted Nematic) no ofrecen buen ángulo de visión.
                Los distinguirás fácilmente porque cuando mires uno de lado o un poco más arriba o abajo con respecto al centro, no verás bien la imagen sino una especie de “manchas” negras en la pantalla.
                Además, tampoco muestran los colores tan vivos como otros tipos de paneles.
                Como punto positivo tienen unas tasas de refresco de imagen bastante bajas (entre 1 ms y 8 ms o milisegundos), lo cual es bueno por ejemplo a la hora de jugar.
                He utilizado algunos monitores con paneles TN tan malos que mis ojos no los soportaban, al poco rato sentía la vista cansada y dolores de cabeza.
                Por otro lado, los paneles IPS (In-Plane Switching o Advanced Display Panel) tienen ángulos de visión bastante mejores que los TN, así como colores más vívidos y “reales”.
            ",
            'shortContent'=> "Como sucede con todos los periféricos, existen monitores con distintas especificaciones que se han de valorar antes de decantarse por adquirir un modelo u otro… pero como sé que hay mucha gente que las desconoce o no les da la importancia que tienen, he pensado que sería bueno escribir un post con el que ayudar a la hora de tomar una decisión.",
            'categoria_id' => 3,
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'title' => "Gran ahorro para Navidad: el portátil HP Pavilion de 15 pulgadas por 200 euros menos",
            'content' => "Las navidades es un excelente momento para cambiar de ordenador portátil, y muchos son los que buscan un modelo que sea lo más completo posible y que les sirva para todo. Una de las opciones que debes valorar es la de comprar el HP Pavilion 15-bc521ns, un modelo que ahora mismo está en oferta y que es realmente completo.
            Este modelo se puede considerar como un todoterreno, por lo que es lo que muchos desean par su día a día. En lo que tiene que ver con el diseño, lo más destacable e importante es que estamos ante un portátil con teclado completo (no le falta el numérico incluso) y que el peso que tienes es de 2,96 kilos, que no es una barbaridad. Por cierto, sus dimensiones son las siguientes: 1,6 x 30,4 x 7 centímetros, lo que es bastante estándar.
            Imagen ordenador portátil HP Pavilion 15-bc521ns
            La pantalla es de 15,6 pulgadas y el panel es tipo LED con una resolución Full HD, lo que permite disfrutar tanto de películas como de juegos algo que permite este equipo ya que, entre otras cosas, integra una tarjeta gráfica dedicada NVIDIA GTX 1650 con 4 GB propios que, sin ofrecer el máximo rendimiento posible, títulos como Fortnite se muestra con una gran calidad y rapidez. Otro buen detalle de este HP Pavilion de 15 pulgadas es que el almacenamiento es tipo SSD, lo que ofrece una gran velocidad el gestionar datos, y la cantidad de gigas que hay en su interior es de 512, más que suficiente para la mayoría de los usuarios.
            HP Pavilion 15-bc521ns, razones por las que es completo
            Un ejemplo es la combinación que ofrece en los dos componentes esenciales que ofrece, como son el procesador y la RAM. En el primero de los casos se utiliza un Intel Core i5-9300H que trabaja a una frecuencia de 2,4 GHz y que, gracias a la tecnología Turbo Boost asegura un buen rendimiento en general sin abusar del consumo. Por el lado de la memoria, la cantidad es de 16 GB, más que suficiente para, incluso, utilizar aplicaciones como Photoshop sin el más mínimo problema. 
            Sin fallos en la conectividad, ya que no le falta WiFi y Bluetooth (así como puertos USB 3.0 y salida HDMI), la batería integrada en este portátil de HP es 63 Whr, por lo que llegar a más de seis horas de uso habitual es posible… y, si no se abusa, se consigue algo más. No le falta una cámara HD para realizar videoconferencias y, adicionalmente, algo que creemos importante: se incluye de sonido HP Audio Boost, lo que hace que todo se escuche con bastante calidad en un conjunto en el que ha colaborado técnicos de B&O.",
            'shortContent'=> "Las navidades es un excelente momento para cambiar de ordenador portátil, y muchos son los que buscan un modelo que sea lo más completo posible y que les sirva para todo. Una de las opciones que debes valorar es la de comprar el HP Pavilion 15-bc521ns, un modelo que ahora mismo está en oferta y que es realmente completo.",
            'categoria_id' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'title' => "Realme 5 Pro, un gran rival del Redmi Note 8 Pro",
            'content' => "Parece que, dentro del sector de la telefonía, tenemos un nuevo jugador. Y es que Realme está pujando muy fuerte para hacerse un hueco cada vez mayor en un mercado colapsado por fabricantes asiáticos cuyas soluciones destacan por su imbatible relación calidad precio. Pero, tras haber analizado el Realme 5 Pro, nos queda claro que este teléfono apunta maneras para ser una excelente alternativa a tener en cuenta.
            Hablamos de un teléfono que llega para competir con el Redmi Note 8 Pro de Xiaomi. Para ello, comparte unas cuantas características técnicas de su gran rival, además de un diseño exquisito y que nos recuerda a alguna que otra solución de Oppo. ¿El motivo? Realmi es una filial de este gigante chino. Sin más, te dejamos con el diseño de este Realme 5 Pro.
            Con una dimensiones de 15.7 x 7.4 x 8.9 mm y un peso de 184 gramos de peso, estamos ante un modelo muy convencional en términos de tamaño y peso. Destaca su parte trasera con un acabado muy curioso: simula la forma del diamante y, en función de cómo incida la luz, ofrece un tono diferente. Respecto al frontal, nada nuevo bajo el sol. De esta manera, nos encontramos con un notch tipo gota de agua para romper mínimamente la estética de la pantalla, además de unos marcos bastante comedidos.
            <h3> Análisis del Realme 5 Pro: diseño y características </h3>
            En un lateral tenemos el botón de desbloqueo, mientras que en el otro lado es donde se sitúan las teclas de control de volumen. Ya, en la parte inferior es donde está el altavoz, puerto USB Tipo C, además de la salida de audio de 3.5 mm. Por último, en la parte trasera nos encontramos con un sistema de cuádruple cámara, además de un lector de huellas dactilares físico que funciona bastante bien. 
            Pasando a las características técnicas, decir que este Realme 5 Pro cuenta con un procesador Snapdragon 712, junto con 4, 6 u 8 GB de memoria RAM y 64 o 128 GB de almacenamiento interno. Y ojo, que es UFS 3.1, por lo que el dispositivo va como una bala. Como podrás esperar, con esta configuración el dispositivo funciona realmente bien. En las pruebas que hemos realizado, hemos disfrutado de una experiencia realmente buena, por lo que no tenemos nada que criticar.
            Lo mismo nos ha pasado con la batería del Realme 5 Pro. Sus 4.035 mAh con carga rápida de 20 W cumple de sobra con las expectativas, lo que nos ha dejado muy buenas impresiones. Eso sí perdemos el NFC, un detalle a tener en cuenta. Pasando al apartado multimedia, tenemos una pantalla de 6.3 pulgadas con tecnología IPS y resolución Full HD+ para ofrecer un rendimiento más que suficiente.
            No es la mejor solución del mercado, pero tampoco decepciona. Por último,  vamos a hablar de la cámara del Realme 5 Pro. Sobre el papel, nos encontramos con cuatro sensores. Una primera lente de 48 megapíxeles, segunda lente de 8 megapíxeles ,una lente para hacer fotos macro, además de un último sensor de 2 megapíxeles para capturar la profundidad.
            Y ojo, que el apartado fotográfico se ha portado bastante bien. Incluso en condiciones de poca luz se ha comportado bastante  bien. Sí, la cámara del Realme 5 Pro se ha comportado realmente bien. Teniendo en cuenta que este modelo llegará al mercado a un precio de unos 200 euros, es una de las mejores opciones a tener en cuenta.",
            'shortContent'=> "Parece que, dentro del sector de la telefonía, tenemos un nuevo jugador. Y es que Realme está pujando muy fuerte para hacerse un hueco cada vez mayor en un mercado colapsado por fabricantes asiáticos cuyas soluciones destacan por su imbatible relación calidad precio. Pero, tras haber analizado el Realme 5 Pro, nos queda claro que este teléfono apunta maneras para ser una excelente alternativa a tener en cuenta.",
            'categoria_id' => 2,
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'title' => "El monitor HP 25MX ",
            'content' => "Lo cierto es que conseguir la mayor cantidad de cuadros por segundo o una respuesta mucho más eficiente a la hora de ejecutar acciones o ver lo que sucede en los juegos es algo que en el mundo gaming se considera esencial. De esta forma, podrás destacar en títulos como Fortnite o PUBG y, además, en otros títulos no te perderás detalle alguno de lo que aparece en pantalla -algo que puede ser capital a la hora de conseguir avanzar en desarrollos de acción o las propias aventuras gráficas-.
            Una de las grandes virtudes que tienes este producto con un panel IPS de 25 pulgadas es que la velocidad que utiliza es de 144 MHz, por lo que la calidad de imagen y la precisión es excelente. Con resolución Full HD, los Hertzios que permite son 60 de máximo y no le falta compatibilidad con tecnoilo9gñías como por ejemplo AMD FreeSync.
            Para ofreceré el mejor de los resultados posibles con los juegos de acción, este modelo llega a un milisegundo con Overdrive, por lo que no hay efecto estela y la velocidad de intercambio de imágenes es prácticamente perfecta. Como no puede ser de otra forma para asegurar la comodidad en el uso, ofrece ajuste vertical y los puertos de entrada van desde HDMI y DisplayPort. Realmente muy completo.",
            'shortContent'=>"Lo cierto es que conseguir la mayor cantidad de cuadros por segundo o una respuesta mucho más eficiente a la hora de ejecutar acciones o ver lo que sucede en los juegos es algo que en el mundo gaming se considera esencial.",
            'categoria_id' => 3,
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'title' => "Huawei Mate 30 Pro, así es el gran rival del iPhone Pro Max",
            'content' => "Análisis del Huawei Mate 30 Pro: diseño
            Estamos ante un terminal que cuenta con un aspecto de altura. Con 15.8 x 7.3 x 8.8 mm de grosor y 198 gramos, estamos ante un dispositivo muy voluminoso. Decir que nos encontramos con algunos detalles muy curiosos y que marcan la diferencia respecto a otros modelos. Especialmente su panel curvado de 90 grados que marca la diferencia. Eso sí, su diseño tan curvado hace que no sea excesivamente ergonómico.
            Otro de los grandes detalles a nivel estético lo tenemos en la parte trasera. Y es que, la distribución de las cámaras ofrece un diseño muy diferente, y es un detalle que nos ha encantado. Por no hablar de la completa paleta de colores del Huawei Mate 30 Pro. Disponible en negro, plateado, violeta y verde, tenemos un dispositivo muy completo a nivel estético.
            En la parte frontal, destaca el notch del Huawei Mate 30 Pro. Hay que decir que la muesca en la pantalla es notable, pero  a cambio tenemos un sistema de reconocimiento facial muy conseguido y que puede plantar cara al del iPhone 11, además de un lector de huellas dactilares integrado en la pantalla del terminal que funciona realmente bien.
            Otro de los detalles más sorprendentes del diseño de este teléfono móvil, llega al ver sus laterales. En el lado derecho, es donde está situado el característico botón de encendido y apagado del terminal. Pero, ¿dónde están las teclas de control de volumen? La firma ha apostado por integrarlos en el lateral de la pantalla. Para ello, mediante una doble pulsación podemos controlar el sonido a nuestro gusto.  El sistema funciona realmente bien consiguiendo un aspecto único.
            Decir que en la parte inferior es donde está situado el puerto USB Tipo C, además del altavoz del terminal. Sí, el Huawei Mate 30 Pro es resistente al polvo y al agua gracias a su certificación IP68, eso sí nos hemos quedado sin jack de 3.5 mm.  Por suerte, en la caja viene el típico cable para poder conectarlos a través de su puerto USB tipo C.
            ",
            'shortContent'=> "Estamos ante un terminal que cuenta con un aspecto de altura. Con 15.8 x 7.3 x 8.8 mm de grosor y 198 gramos, estamos ante un dispositivo muy voluminoso.",
            'categoria_id' => 2,
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
