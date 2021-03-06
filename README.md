<p align="center"><a href="https://laravel.com" target="_blank">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">
    Presentaci贸n Proyecto Tictactoe Montechelo
</p>

## Comandos para ejecuci贸n 馃敡

```
    // Instalaci贸n de paquetes
    composer install
    
    // Creaci贸n de archivo de entorno
    php -r "file_exists('.env') || copy('.env.example', '.env');"
    
    // Creaci贸n de key
    php artisan key:generate --ansi
    
    // Ejecuci贸n de migraciones y seeders
    php artisan migrate:fresh --seed
    
    // Puesta en marcha
    php artisan serve
```

## Entregables 馃搵
```
Patrones de Software: para cada 铆tem se requiere una definici贸n breve y un
ejemplo de una situaci贸n donde se deba usar.
```


## Patr贸n singleton
```
Singleton es un patr贸n de dise帽o creacional que garantiza que tan solo exista un objeto 
de su tipo y proporciona un 煤nico punto de acceso a 茅l para cualquier otro c贸digo.

Se usa para guardar datos o funcionalidades globales, compartidas por todo el programa. 
```
## Patr贸n observador
```
La idea de este patr贸n es que nos permita definir una dependencia uno-a-muchos entre varios objetos,
provocando que cuando uno cambie de estado se lo notifique a sus objetos dependientes. 

El objetivo de este patr贸n es reducir el acoplamiento entre clases que requieren mantener 
una gran consistencia en sus relaciones, siendo clave para la implementaci贸n del patr贸n MVC.
```
## Patr贸n MVC
```
Su nombre, MVC, parte de las iniciales de Modelo-Vista-Controlador, que son las capas o grupos de 
componentes en los que organizaremos nuestras aplicaciones bajo este paradigma.
```
## Explique se significa Bajo Acoplamiento y Alta Cohesi贸n?
```
El acoplamiento es el grado en que los m贸dulos de un programa dependen unos de otros.

Si habl谩semos de POO, una clase tendr谩 alta cohesi贸n si sus m茅todos est谩n relacionados entre s铆, 
tienen un contenido claro y tem谩tica com煤n, trabajan con tipos similares, etc.
Todo bien encerrado dentro de la clase, y perfectamente delimitado.
```

## Describa las ideas y problemas que originaron SOA, lo que implica la pr谩ctica,
## los beneficios que pueden lograrse y las consecuencias negativas que pueden
## observarse por desarrollos que utilizan esta pr谩ctica.
```
SOA es una arquitectura de aplicaci贸n en la cual todas las funciones est谩n definidas como servicios independientes 
con interfaces invocables que pueden ser llamados en secuencias bien definidas para formar los procesos de negocio.
El gran beneficio de SOA es la agilidad que proporciona a las organizaciones que la usan. 
Las caracter铆sticas propias de SOA permiten a las organizaciones la capacidad de controlar un problema de forma general, 
permitiendo una respuesta m谩s r谩pida y eficaz y por tanto adaptarse de la mejor forma a los cambios.
```
## Describa las ideas y problemas que originaron la Inyecci贸n de dependencia y
## la inversi贸n de control - DI/IOC, lo que implica la pr谩ctica, los beneficios que
## pueden lograrse y las consecuencias negativas que pueden observarse por
## desarrollos que utilizan esta pr谩ctica.

La meta principal de la 鈥淚nversi贸n de Control鈥? y la 鈥淚nyecci贸n de Dependencia鈥? es remover dependencias de una aplicaci贸n. 
Esto hace que el sistema est茅 separado y sea de f谩cil mantenimiento.


## Describa las ideas y problemas que originaron la Programaci贸n Orientada a
## Aspectos - AOP, lo que implica la pr谩ctica, los beneficios que pueden lograrse
## y las consecuencias negativas que pueden observarse por desarrollos que
## utilizan esta pr谩ctica.

Es un paradigma de programaci贸n que permite una adecuada modularizaci贸n de las aplicaciones y posibilita una mejor separaci贸n de responsabilidades. 


## Desarrollo
```
* Se debe realizar una aplicaci贸n Laravel, esta debe tener migraciones y semillas.

* La pantalla inicial debe presentar dos opciones: Nueva partida o unirse a partida.

* Si se da en nueva partida debe generar un id de partida (valido para un solo usuario
que lo utilice), si la opci贸n es Unirse a partida debe presentar un cuadro de texto para
ingresar el id.

* Debe tener un espacio editable para poner el nombre del jugador y por defecto
llenarlo con 鈥淛ugador 1鈥? al creador y 鈥淛ugador 2鈥? al invitado (Debe ser visible y no
editable el nombre del contrincante).

* Cada jugador puede jugar en su respectivo turno, la partida inicia por el jugador 1 la
primera vez y cada vez que se reinicie debe iniciar el otro jugador (Se deben alternar
por nuevas partidas).

* No se puede sobrescribir sobre un campo ya jugado previamente.

* No debe haber confirmaci贸n de movimiento (si se equivoc贸 poniendo la figura, queda
como est谩).

* El juego termina cuando todas las casillas est茅n llenas o existan 3 figuras iguales en
l铆nea recta.

* Debe existir un bot贸n de reiniciar la partida que solo aparece cuando el juego ha
finalizado.

* Se debe poder jugar en dos navegadores.

* Debe realizar el front end utilizando si es posible hojas de estilos.
```