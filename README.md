# 🎮 Valorant 2026 – Aplicación CRUD en PHP + MariaDB + Docker

Aplicación web CRUD desarrollada en **PHP 8.2**, utilizando **MariaDB 11** como base de datos y **Docker** para la contenedorización completa del entorno.  
Permite gestionar usuarios y **agentes de Valorant** (temporada 2026).

---

## 📦 Tecnologías utilizadas

- PHP 8.2 + Apache  
- MariaDB 11  
- Docker & Docker Compose  
- PDO (PHP Data Objects)  
- HTML5 + CSS básico  
- Sesiones para autenticación  

---

## 📁 Estructura del proyecto
conf/
└── 000-default.conf
docker-compose.yml
Dockerfile
.env
sql/
└── database.sql
src/
├── add.php
├── add_action.php
├── config.php
├── delete.php
├── edit.php
├── edit_action.php
├── home.php
├── index.php
├── login.php
├── login_action.php
├── logout.php
├── registro.php
└── registro_action.php
text---

## 🗄 Base de datos

El archivo `sql/database.sql` crea la base de datos **valorant2026** con:

### Tabla `usuarios`
- `usuario_id` (PK)
- `nombre_usuario`
- `contraseña` (almacenada de forma segura)
- `correo` (UNIQUE)
- `creacion` (timestamp)

### Tabla `agentes` (CRUD principal)
- `agente_id` (PK)
- `nombre` (UNIQUE)
- `rol` (Duelist, Controller, Sentinel, Initiator)
- `pais`
- `anio_lanzamiento` (numérico)
- `dificultad` (1 = fácil → 5 = muy difícil)
- `ultimate`

Incluye **datos de ejemplo** para ambas tablas (10 agentes + 3 usuarios).

---

## ⚙️ Configuración del entorno

### 1. Crear archivo `.env`

Debe estar en la raíz del proyecto:

```env
MYSQL_ROOT_PASSWORD=JaimePortilla@2006
MYSQL_DATABASE=valorant2026
MYSQL_USER=JaimePortilla
MYSQL_PASSWORD=JaimePortilla@2006

▶️ Puesta en marcha
Ejecuta:
Bashdocker-compose up --build
Esto levantará:

Contenedor MariaDB
Contenedor PHP + Apache
Inicialización automática de la base de datos con datos de ejemplo

Accede a la aplicación en:
texthttp://localhost:8080

## 🔐 Usuarios de prueba

| Usuario     | Correo                | Contraseña     |
|------------|-----------------------|---------------|
| admin      | admin@valorant.com    | Admin2026!    |
| jettfan    | jett@valorant.com     | Jett2026!     |
| phoenixgod | phoenix@valorant.com  | Phoenix2026!  |

## 🧩 Funcionalidades

### ✔ Autenticación

- Registro de usuarios
- Inicio de sesión
- Cierre de sesión
- Protección de rutas mediante sesiones

### ✔ CRUD de agentes

- Crear agentes
- Listar agentes
- Editar agentes
- Eliminar agentes


---

## 🔄 Reiniciar todo desde cero (borra volúmenes)

```bash
docker-compose down -v
docker-compose up --build
docker-compose logs -f
```