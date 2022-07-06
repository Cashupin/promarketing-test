# Prueba Técnica ProMarketingChile!

Pasos para la Instalación:

 - Instalar Librerias:
   
       composer install
 
 - Configurar archivo .env desde el archivo .env.example
 - Ejecutar Migración:
	 Sin seeder:
	
       php artisan migrate
      
      Con seeder:
  
       php artisan migrate --seed

