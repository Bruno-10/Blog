# Blog
Proyecto individual tipo blog

Pasos para iniciar el proyecto 

1- Aplicamos el comando desde consola: Git clone https://github.com/Bruno-10/Blog.git para clonar el repositorio, debemos realizarlo situados en la carpeta en la que queremos instalarlo. Luego ubicados en la ruta del proyecto ejecutar el comando: composer install.


2- Crear Base de Datos llamada "blog_db"

3- Desde el editor de preferencia debemos configurar el archivo .env (duplicar el .envexample y renombrarlo) y asignar estos valores desde la linea 9 a 14:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_db
DB_USERNAME=root
DB_PASSWORD=

4- Ubicados a traves de la consola en la posicion donde clonaron el repositorio correr los siguientes comandos:

php artisan key:generate

php artisan migrate

php artisan db:seed (Genera usuario Administrador para interactuar con el Panel de Control, junto con Posts, categorias, comentarios y otros usuarios para que el ejemplo del sitio funcione bien. En caso de querer modificar este Seeder dirigase al archivo DataBaseSeeder.php ubicado App/database/seeds)

php artisan storage:link

php artisan serv 
Datos de acceso como Administrador

Email: admin@admin.con Password: blogRoot

5- Inicializar programa que brinde conexion a base de datos (por ejemplo XAMPP)

6- Abrir el navegador e ingresar a la ruta

`localhost:8000`
