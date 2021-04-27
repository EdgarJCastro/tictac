<p align="center"><a href="https://laravel.com" target="_blank">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">
    Presentación Proyecto Tictactoe Montechelo
</p>

## Comandos para ejecución

```
    // Instalación de paquetes
    composer install
    
    // Creación de archivo de entorno
    php -r "file_exists('.env') || copy('.env.example', '.env');"
    
    // Creación de key
    php artisan key:generate --ansi
    
    // Ejecución de migraciones y seeders
    php artisan migrate:fresh --seed
    
    // Puesta en marcha
    php artisan serve
```

## Entregables

Patrones de Software: para cada ítem se requiere una definición breve y un
ejemplo de una situación donde se deba usar.

Patrones de Software: para cada ítem se requiere una definición breve y un
ejemplo de una situación donde se deba usar.



 Se debe realizar una aplicación Laravel, esta debe tener migraciones y semillas.
 La pantalla inicial debe presentar dos opciones: Nueva partida o unirse a partida
 Si se da en nueva partida debe generar un id de partida (valido para un solo usuario
que lo utilice), si la opción es Unirse a partida debe presentar un cuadro de texto para
ingresar el id
 Debe tener un espacio editable para poner el nombre del jugador y por defecto
llenarlo con “Jugador 1” al creador y “Jugador 2” al invitado (Debe ser visible y no
editable el nombre del contrincante)
 Cada jugador puede jugar en su respectivo turno, la partida inicia por el jugador 1 la
primera vez y cada vez que se reinicie debe iniciar el otro jugador (Se deben alternar
por nuevas partidas)
 No se puede sobrescribir sobre un campo ya jugado previamente
 No debe haber confirmación de movimiento (si se equivocó poniendo la figura, queda
como está)
 El juego termina cuando todas las casillas estén llenas o existan 3 figuras iguales en
línea recta
 Debe existir un botón de reiniciar la partida que solo aparece cuando el juego ha
finalizado.
 Se debe poder jugar en dos navegadores
 Debe realizar el front end utilizando si es posible hojas de estilos
