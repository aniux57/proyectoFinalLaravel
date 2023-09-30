## Configurando el Key del Proyecto

Es necesario configurar localmente la key de encripción del proyecto para poder ejecutarlo, para ellos ejecutar los siguientes comandos:

- ```cp .env.example .env```
- ```php artisan key:generate```

## Configuración de la Base de Datos

En el archivo .env modificar la conexión a la base de datos

```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

## Ejecución de las Migraciones

Ejecutamos el comando

```php artisan migrate```

## Correr el Proyecto

Para correr el proyecto y poder probarlo en local ejecutar el siguiente comando:

```php artisan serve```

## Consideraciones para Windows

Todos los comandos deben ejecutarse con la asistencia de [gitbash](https://git-scm.com/downloads)
