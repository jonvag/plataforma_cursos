# 😎Plataforma de curso  en Laravel!

Proyecto para que  los usuarios puedan realizar cursos y seguir el avance (tipo udemy)


# 🧑‍💻Para correr en local hacer lo siguiente

**Prerequisitos:**
 - Xampp con php 8.0.2 (recomendado) o php entre 8.0 y 8.2
 - composer
 - node.js

 1. Clona el repositorio
    Debe clonarse en  la carpeta htdocs de xampp
 2. Accede al Directorio del Proyecto: Una vez clonado, accede al directorio del proyecto:
	`cd nombre-del-repositorio`
  
 3. Instala las Dependencias de Composer: Laravel utiliza Composer para gestionar sus dependencias. Asegúrate de tener Composer instalado y luego ejecuta:
  `composer install`
  
 4. Instala las Dependencias de NPM: Laravel también utiliza Node.js y NPM para gestionar los assets front-end. Asegúrate de tener Node.js instalado
  `npm install`
 5. Copia el Archivo .env: Laravel utiliza un archivo .env para la configuración del entorno. Copia el archivo de ejemplo .env.example a .env:
 `cp .env.example .env`

 6. Correr en Xampp apache y mysql
 
 7. Genera la Clave de Aplicación: Laravel requiere una clave de aplicación para la seguridad. Puedes generarla con el siguiente comando
 `php artisan key:generate`
 8. Migra la Base de Datos: Si el proyecto incluye migraciones, debes ejecutarlas para crear las tablas necesarias en la base de datos:
 `php artisan migrate`
		 Si también necesitas poblar la base de datos con datos iniciales, puedes usar:
		 `php artisan migrate --seed`
 
 9. Compila los Assets Front-end: Si el proyecto utiliza assets front-end como CSS o JavaScript, debes compilarlos. Puedes hacerlo con el siguiente comando:
 `npm run dev`
 Esto compilará tus assets y los observará para recompilarse cuando haya cambios.
 
 10. En otra terminal inicia el Servidor de Desarrollo: Finalmente, puedes iniciar el servidor de desarrollo de Laravel con el siguiente comando
 `php artisan serve`

 11. La web ya deberia estar corriendo sin  problemas
   `http://127.0.0.1:8000`
   o el puerto que te de la terminal

 12. El usuario de prueba es :
   usuario admin: jonapiscope@gmail.com
   clave: 12345678

 
