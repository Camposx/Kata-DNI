# Kata-DNI

## Descripción
Con esta aplicación podrás obtener la letra de tu DNI, introduciendo el número por API.

## Guía del proyecto
Se deberá introducir el número por API en formato JSON.

Debe ser un número entero entre 0 y 99999999, si se intruduce un número fuera del rango o otro tipo de dato devolverá el error correspondiende.

Ejemplos:

![image](https://github.com/user-attachments/assets/fbd8fec7-ae34-4115-89fa-f8437e86ab78)


![image](https://github.com/user-attachments/assets/58f44d90-b5d5-4884-9ee5-4a365b7d2c32)


![image](https://github.com/user-attachments/assets/251678dd-f6da-412a-bebf-8c04ccd61499)


## Requisitos de instalación

Para poder probar este proyecto en local necesitarás:

1. XAMPP (o cualquier otro servidor local que soporte PHP y MySQL)

2. Terminal del Sistema Operativo

3. Instalar Composer

4. Instalar NPM via Node.js

5. Xdebug (para poder ver el test coverage)

6. Postman (o cualquier otra plataforma para usar la API, como *Insomnia*)

## 💻 Instalación

1. Clonar el repositorio:
```
    git clone https://github.com/Camposx/Kata-DNI.git
```

2. Instalar Composer:
```
    composer install
```

3. Instalar NPM:
```
    npm install
```

4. Crear un archivo '.env' tomando de ejemplo el archivo '.env.example' y modificar las líneas:
    - DB_CONNECTION=mysql
    - DB_DATABASE=dnidb

5. Crear una base de datos en MySQL vacías (yo uso *phpMyAdmin*)

6. Generar todas las tablas y rellenar las letras:
```
    php artisan migrate:fresh --seed
```

7. Correr NPM:
```
    npm run dev
```

8. Correr Laravel (en otra terminal):
```
    php artisan serve
```

Con todo esto será posible usar la API del proyecto con la URL que se genere este último comando.

## Diagrama de la base de datos


![image](https://github.com/user-attachments/assets/bb96946d-9f39-46cc-a031-731c3882cb63)

## API Endpoints

En este proyecto existe un único endpoint para poder ver la letra del DNI devuelta según el número introducido:

```
    http://127.0.0.1:8000/api/
```

## Tests

Este proyecto tiene un **100%** de test coverage.

Si tienes Xdebug instalado puedes probar los tests y ver el coverage en la terminal usando:
```
   php artisan test --coverage
```
Si no tienes Xdbug puedes correr los test sin coverage usando:
```
   php artisan test
```
![image](https://github.com/user-attachments/assets/a8a31b85-42db-43b3-b65c-8f61b148c290)


## Tecnologías y herramientas

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=4479A1&color=4479A1'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Laravel' src='https://img.shields.io/badge/Laravel-100000?style=for-the-badge&logo=Laravel&logoColor=white&labelColor=FF2D20&color=FF2D20'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Postman' src='https://img.shields.io/badge/Postman-100000?style=for-the-badge&logo=Postman&logoColor=white&labelColor=FF6C37&color=FF6C37'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Jira' src='https://img.shields.io/badge/Jira-100000?style=for-the-badge&logo=Jira&logoColor=white&labelColor=0052CC&color=0052CC'/></a>

## Autor

Este proyecto fue desarrollado completamente por:

[Alejandro Campos González](https://github.com/Camposx)
