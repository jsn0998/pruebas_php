Prueba PHP
================

#### Uso
1. Hacer fork de este repositorio
1. Ejecutar `composer install`
1. Ejecutar `php ./vendor/phpunit/phpunit/phpunit` (requiere php >= 7.3 si usas otra version por favor actualizar primero el archivo composer.json)

#### Tareas

- Corrija cualquier error y agregue lo necesario para que la prueba funcione y haga commit.
- Agregue una prueba unitaria para el método makeCallByName pasando un contacto válido, use mock para cualquier dependencia dura y agregue los assertions correctos.
- Agregue el código necesario para verificar cuando no se encuentra el contacto y agregue otra prueba para probar ese caso.
- Agregue su propia lógica para enviar un SMS dado un número y el cuerpo, el método debe validar el número usando el método validateNumber de ContactService y usando los métodos de propiedad del Provider.
- Al escribir las pruebas unitaras, debe usar mocks en cada método de ContactService.

#### Bonus
- ¿Puede agregar soporte para dos operadores de telefonía móvil? ¿Cómo lograrías eso?
- Cree una nueva integración con un servicio externo como Twilio para enviar y rastrear un SMS.
- Cree pruebas unitarias para esta integración utilizando un servidor web simulado o similar.