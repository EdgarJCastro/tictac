<p align="center"><a href="https://laravel.com" target="_blank">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">
    Presentación Proyecto Tictactoe Montechelo
</p>

## Comandos para ejecución 🔧

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

## Entregables 📋
```
Patrones de Software: para cada ítem se requiere una definición breve y un
ejemplo de una situación donde se deba usar.
```


## Patrón singleton
```
Singleton es un patrón de diseño creacional que garantiza que tan solo exista un objeto 
de su tipo y proporciona un único punto de acceso a él para cualquier otro código.

Se usa para guardar datos o funcionalidades globales, compartidas por todo el programa. 
```
## Patrón observador
```
La idea de este patrón es que nos permita definir una dependencia uno-a-muchos entre varios objetos,
provocando que cuando uno cambie de estado se lo notifique a sus objetos dependientes. 

El objetivo de este patrón es reducir el acoplamiento entre clases que requieren mantener 
una gran consistencia en sus relaciones, siendo clave para la implementación del patrón MVC.
```
## Patrón MVC
```
Su nombre, MVC, parte de las iniciales de Modelo-Vista-Controlador, que son las capas o grupos de 
componentes en los que organizaremos nuestras aplicaciones bajo este paradigma.
```
## Explique se significa Bajo Acoplamiento y Alta Cohesión?
```
El acoplamiento es el grado en que los módulos de un programa dependen unos de otros.

Si hablásemos de POO, una clase tendrá alta cohesión si sus métodos están relacionados entre sí, 
tienen un contenido claro y temática común, trabajan con tipos similares, etc.
Todo bien encerrado dentro de la clase, y perfectamente delimitado.
```

## Describa las ideas y problemas que originaron SOA, lo que implica la práctica,
## los beneficios que pueden lograrse y las consecuencias negativas que pueden
## observarse por desarrollos que utilizan esta práctica.
```
SOA es una arquitectura de aplicación en la cual todas las funciones están definidas como servicios independientes 
con interfaces invocables que pueden ser llamados en secuencias bien definidas para formar los procesos de negocio.
El gran beneficio de SOA es la agilidad que proporciona a las organizaciones que la usan. 
Las características propias de SOA permiten a las organizaciones la capacidad de controlar un problema de forma general, 
permitiendo una respuesta más rápida y eficaz y por tanto adaptarse de la mejor forma a los cambios.
```
## Describa las ideas y problemas que originaron la Inyección de dependencia y
## la inversión de control - DI/IOC, lo que implica la práctica, los beneficios que
## pueden lograrse y las consecuencias negativas que pueden observarse por
## desarrollos que utilizan esta práctica.

La meta principal de la “Inversión de Control” y la “Inyección de Dependencia” es remover dependencias de una aplicación. 
Esto hace que el sistema esté separado y sea de fácil mantenimiento.


## Describa las ideas y problemas que originaron la Programación Orientada a
## Aspectos - AOP, lo que implica la práctica, los beneficios que pueden lograrse
## y las consecuencias negativas que pueden observarse por desarrollos que
## utilizan esta práctica.

Es un paradigma de programación que permite una adecuada modularización de las aplicaciones y posibilita una mejor separación de responsabilidades. 


## Desarrollo
```
* Se debe realizar una aplicación Laravel, esta debe tener migraciones y semillas.

* La pantalla inicial debe presentar dos opciones: Nueva partida o unirse a partida.

* Si se da en nueva partida debe generar un id de partida (valido para un solo usuario
que lo utilice), si la opción es Unirse a partida debe presentar un cuadro de texto para
ingresar el id.

* Debe tener un espacio editable para poner el nombre del jugador y por defecto
llenarlo con “Jugador 1” al creador y “Jugador 2” al invitado (Debe ser visible y no
editable el nombre del contrincante).

* Cada jugador puede jugar en su respectivo turno, la partida inicia por el jugador 1 la
primera vez y cada vez que se reinicie debe iniciar el otro jugador (Se deben alternar
por nuevas partidas).

* No se puede sobrescribir sobre un campo ya jugado previamente.

* No debe haber confirmación de movimiento (si se equivocó poniendo la figura, queda
como está).

* El juego termina cuando todas las casillas estén llenas o existan 3 figuras iguales en
línea recta.

* Debe existir un botón de reiniciar la partida que solo aparece cuando el juego ha
finalizado.

* Se debe poder jugar en dos navegadores.

* Debe realizar el front end utilizando si es posible hojas de estilos.
```