# 🧩 Mini Retos Principios SOLID usando PHP – Sistema de Transporte

Este proyecto contiene mini retos prácticos diseñados para entender los principios **SOLID** en programación orientada a objetos utilizando **PHP 8.1**.  
El tema elegido para todos los ejemplos es un **sistema de transporte**, lo que permite mantener la coherencia y facilitar el proceso.

---

## 🧠 ¿Qué es SOLID?

**SOLID** es un acrónimo que representa cinco principios fundamentales del diseño de software orientado a objetos.  
Estos principios ayudan a escribir código **más limpio, mantenible, extensible y reutilizable**.

| Letra | Principio                          | En español                             |
|-------|------------------------------------|----------------------------------------|
| S     | Single Responsibility Principle    | Principio de Responsabilidad Única     |
| O     | Open/Closed Principle              | Principio Abierto/Cerrado              |
| L     | Liskov Substitution Principle      | Principio de Sustitución de Liskov     |
| I     | Interface Segregation Principle    | Principio de Segregación de Interfaces |
| D     | Dependency Inversion Principle     | Principio de Inversión de Dependencias |

---

## 📚 Estructura del repositorio

Cada principio tiene su propia carpeta con dos subcarpetas:

- `antes/`: Código que **viola** el principio.
- `despues/`: Código **refactorizado** que aplica correctamente el principio.

También se incluye un archivo `README.md` en cada carpeta explicando el problema, la solución y los beneficios obtenidos.

---

## 🎯 Objetivos del repositorio y sus retos

- Comprender el propósito de cada principio SOLID.
- Identificar violaciones comunes de estos principios.
- Aprender a refactorizar código orientado a objetos aplicando buenas prácticas.
- Promover una arquitectura limpia y profesional desde el diseño.

---

## ⚙️ Autoload con Composer

Este proyecto incluye un archivo `composer.json` con configuración **PSR-4** para que puedas cargar automáticamente las clases desde las carpetas `despues/`.

### 🔁 Pasos para generar el autoload:

1. Asegúrate de tener [Composer](https://getcomposer.org/) instalado.
2. Ejecuta el siguiente comando desde la raíz del proyecto, el cual generará automáticamente la carpeta vendor y sus correspondientes archivos:

```
composer dump-autoload
```

3. Usa `require 'vendor/autoload.php';` en tus scripts para cargar automáticamente las clases.

---

## 🔗 Enlaces de interés

- [SOLID – Wikipedia](https://es.wikipedia.org/wiki/SOLID)
- [PHP-FIG PSR-4](https://www.php-fig.org/psr/psr-4/)
- [Entendiendo los principios SOLID (en inglés)](https://dev.to/abhay_yt_52a8e72b213be229/understanding-the-solid-principles-in-php-and-how-they-improve-code-quality-45fk)
- [Composer – Autoloading Guide](https://getcomposer.org/doc/01-basic-usage.md#autoloading)

---

## ✅ Requisitos

- PHP 8.1 o superior
- Composer

---

## 🧑‍🏫 Licencia y uso - GPL-3.0 license

Este proyecto está diseñado exclusivamente con fines **educativos y académicos**.  
Puedes modificarlo, adaptarlo o integrarlo en tus propios cursos o formaciones internas, pero no olvides regalarme una estrella en GitHub e incluirme en los créditos.

---

## 👤 Autor - **Alex Beltrán**  
🌐 [LexBelCode](https://vectornaranja.com)  

📧 vectorna@gmail.com  
📧 abeltran@vectornaranja.com  

[![LinkedIn](https://img.shields.io/badge/LinkedIn-LexBel-blue?style=flat&logo=linkedin)](https://www.linkedin.com/in/lexbel/)  
[![X](https://img.shields.io/badge/X-@LexBelCode-000000?style=flat&logo=x)](https://x.com/LexBelCode)

---

