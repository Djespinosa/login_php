# Proyecto de Autenticación y Dashboard con PHP

Este proyecto es un sistema de autenticación en PHP que permite a los usuarios iniciar sesión y visualizar un gráfico con la cantidad de productos disponibles en su base de datos correspondiente. Utiliza Bootstrap 5 para el diseño y Chart.js para la visualización de datos.

## Requisitos

Antes de ejecutar el proyecto, asegúrate de cumplir con los siguientes requisitos:

- Tener instalado **PHP 8.x**
- Extensión **mysqli** habilitada en PHP
- Acceso a una base de datos con la estructura definida

## Instalación y Configuración

1. **Clonar el repositorio**
   ```sh
   git clone https://github.com/tu-usuario/tu-repositorio.git
   cd tu-repositorio
   ```

2. **Configurar la base de datos**
   - En la base de datos `u701437552_Usuarios`, la tabla `usuarios` debe contener los siguientes campos:
     - `usuario` (nombre de usuario)
     - `contrasena_hash` (contraseña encriptada para inicio de sesión)
     - `base_datos` (nombre de la base de datos del cliente)
     - `usuario_bd` (usuario de la base de datos del cliente)
     - `contrasena_bd_hash` (contraseña del usuario de la base de datos del cliente)

3. **Habilitar la extensión mysqli en PHP**
   - Edita el archivo `php.ini` y asegúrate de que la siguiente línea esté descomentada:
     ```ini
     extension=mysqli
     ```

## Ejecución del Proyecto

Para iniciar el servidor localmente, usa el archivo `start.bat` incluido en el proyecto:

1. **Ejecutar el servidor**
   - Haz doble clic en `start.bat` o ejecúta el siguiente comando en la terminal dentro del directorio del proyecto:
     ```sh
     php -S localhost:8000
     ```
   - Esto iniciará el servidor embebido de PHP en `http://localhost:8000`

2. **Abrir el navegador y acceder a la aplicación**
   - Dirígete a `http://localhost:8000/index.php` para iniciar sesión.

## Tecnologías Utilizadas

- **PHP 8.x** (Back-end y autenticación)
- **MySQL/MariaDB** (Base de datos de usuarios y productos)
- **Bootstrap 5** (Interfaz de usuario responsiva)
- **Chart.js** (Visualización de datos en gráficos)

## Estructura del Proyecto

```
proyecto_carepp/
├── classes/
│   ├── UserConnection.php  # Clase para la conexión a la base de datos del cliente
│   ├── Auth.php  # Clase para la autenticación usuario
│   ├── Connection.php  # Clase para la conexión a la base de datos de los usuarios
├── public/
│   ├── css/
│   │   ├── login.css  # Cerrar sesión
│   ├── careppsas_cover.jpg  # Imagen del logo
│   ├── carepp_logo.png  # Imagen del logo
├── server/
│   ├── login/
│   │   ├── login.php  # Iniciar sesión
│   │   ├── logout.php  # Cerrar sesión
├── index.php  # Página de inicio de sesión
├── home.php  # Dashboard principal con gráfico
├── start.bat  # Script para iniciar el servidor localmente
├── README.md  # Documentación del proyecto
```

## Notas Adicionales

- Asegúrate de que la contraseña de la base de datos del cliente se almacene correctamente.
- Si tienes problemas de conexión, verifica que el usuario y la contraseña de la base de datos sean correctos.
- Puedes modificar los estilos en `Bootstrap` para personalizar la apariencia del dashboard.

## Contacto

Si tienes dudas o problemas, contacta a [deymerespinosap@gmail.com] o abre un issue en el repositorio.

---

Desarrollado por **[Deymer Espinosa]** 🚀

