# Proyecto Escuela-Laravel con Docker Compose

Este proyecto te permite levantar un entorno de desarrollo completo para tu aplicación Escuela-Laravel usando Docker Compose. Incluye un servidor web Nginx, PHP-FPM y una base de datos MySQL.

---

## 🚀 Inicio Rápido

Sigue estos pasos para poner en marcha el proyecto en tu máquina local.

### 📋 Prerrequisitos

Asegúrate de tener Docker y Docker Compose instalados en tu sistema.

* **Docker:** [Guía de instalación de Docker](https://docs.docker.com/get-docker/)
* **Docker Compose:** [Guía de instalación de Docker Compose](https://docs.docker.com/compose/install/)

### 🛠️ Tecnologías Usadas

Este proyecto utiliza las siguientes versiones y tecnologías:

* **Laravel:** 11.x (específicamente **^11.31**)
* **PHP:** 8.2 (configurado en el `Dockerfile`)
* **MySQL:** 8.0 (configurado en `docker-compose.yml`)
* **Nginx:** latest (configurado en `docker-compose.yml`)
* **Composer:** v2.x (usado dentro del contenedor PHP)

### ⚙️ Configuración del Proyecto

1.  **Clona el repositorio:**

    ```bash
    git clone [https://github.com/hriveramx/escuela-laravel](https://github.com/hriveramx/escuela-laravel)
    cd escuela-laravel
    ```

2.  **Configura el archivo `.env` de Laravel:**
    Navega a la carpeta de tu aplicación Laravel (`laravel/`) y copia el archivo de ejemplo:

    ```bash
    cd laravel/
    cp .env.example .env
    ```

    Luego, edita el archivo `.env` y asegúrate de que las variables de la base de datos coincidan con las configuradas en `docker-compose.yml`:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=db             # Importante: 'db' es el nombre del servicio en docker-compose.yml
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=laraveluser
    DB_PASSWORD=laravelpass
    ```

    Vuelve al directorio raíz de tu proyecto (donde está `docker-compose.yml`):
    ```bash
    cd ..
    ```

---

## 🛠️ Levantando el Entorno Docker

1.  **Construye y levanta los contenedores:**
    Este comando construirá las imágenes Docker (incluyendo la de PHP con las extensiones necesarias) y iniciará todos los servicios en segundo plano (`-d`).

    ```bash
    docker-compose up --build -d
    ```

    * `--build`: Es crucial la primera vez o cada vez que hagas cambios en el `Dockerfile`.

2.  **Instala las dependencias de Composer:**
    Accede al contenedor de tu aplicación y ejecuta Composer:

    ```bash
    docker exec -it laravel_app composer install
    ```

3.  **Genera la clave de la aplicación Laravel:**

    ```bash
    docker exec -it laravel_app php artisan key:generate
    ```

4.  **Ejecuta las migraciones de la base de datos:**
    Esto creará las tablas de tu base de datos.

    ```bash
    docker exec -it laravel_app php artisan migrate
    ```

---

## 🌐 Accede a tu Aplicación

Una vez que todos los pasos anteriores se completen, tu aplicación Laravel debería estar accesible en tu navegador:

* **Aplicación Laravel:** `http://localhost:8080`

---

## 🛑 Comandos Útiles de Docker Compose

* **Detener los contenedores:**
    ```bash
    docker-compose stop
    ```

* **Detener y eliminar los contenedores (conserva volúmenes):**
    ```bash
    docker-compose down
    ```

* **Detener y eliminar los contenedores y volúmenes (limpieza completa):**
    ```bash
    docker-compose down -v
    ```

* **Reiniciar servicios (después de cambios en `docker-compose.yml` o `Dockerfile`):**
    ```bash
    docker-compose down
    docker-compose up --build -d
    ```

* **Acceder a la shell de un contenedor (ej. para depurar):**
    ```bash
    docker exec -it laravel_app bash   # Para el contenedor PHP
    docker exec -it laravel_db bash    # Para el contenedor MySQL
    ```

* **Ver los logs de un servicio:**
    ```bash
    docker-compose logs -f app
    ```

---

## ❓ ¿Problemas o Dudas?

Si no te funciona algo, tienes preguntas, etc. No dudes en contactarme: hriveradg@gmail.com 