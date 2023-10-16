## Clonar el ambiente
Es necesario tener algunas configuraciones iniciales para el proyecto, tales como configurar la Base de Datos, o tener la la configuración del correo electrónico y la llame para poder ejecutar el mismo. Para ello se debe ejecutar el siguiente comando:

```cp .env.example .env```

## Configuración de la Base de Datos

Antes de generar la llave para el proyecto, es necesario configurar la conexion a la DB, para ello en el archivo .env modificar la conexión a la base de datos.

```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<db name>
DB_USERNAME=root
DB_PASSWORD=
```

## Generar la llave

Para generar la llave solo es necesario ejecutar el siguiente comando:

```php artisan key:generate```

## Ejecución de las Migraciones

Para poder correr las migraciones ejecutamos el siguiente comando:

```php artisan migrate```

## Correr el Proyecto

Para correr el proyecto y poder probarlo en local ejecutar el siguiente comando:

```php artisan serve```

## Consideraciones para Windows

Todos los comandos deben ejecutarse con la asistencia de [gitbash](https://git-scm.com/downloads)
