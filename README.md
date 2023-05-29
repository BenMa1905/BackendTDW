## Configuraciones iniciales
1. Clonar proyecto `git clone https://github.com/BenMa1905/BackendTDW.git`
2. Entrar a la carpeta del proyecto `cd BackendTDW`
3. Instalar dependencias `composer install`
4. Copiar el .env.example usando `cp .env.example .env`
5. Modificar usuario y contraseña del .env, en la línea 15 y 16 `DB_USERNAME, DB_PASSWORD`
6. Ejecutar `php artisan migrate`
7. Ejecutar `php artisan db:seed`
8. Inicializar el proyecto `php artisan serve`
9. Ejecutar consultas mediante navegador o software especializado.
10. **¡DISFRUTE!**


## Uso de la tabla "perro"

- Consultar todos los perros:
  - Método: GET
  - Ruta: `{URL}/api/perros`

- Consultar un perro en específico:
  - Método: GET
  - Ruta: `{URL}/api/perros/{id}`

- Crear un perro:
  - Método: POST
  - Ruta: `{URL}/api/perros`
  - JSON: `{
  "name": {text},
  "breed": {text},
  "sex": {Male,Female},
  "age": {int},
  "description": {text},
  "photo": {text},
  "idUser": {int}
}`

- Actualizar un perro:
  - Método: PUT
  - Ruta: `{URL}/api/perros/{id}`
  - JSON: `{
  "name": {text},
  "breed": {text},
  "sex": {Male,Female},
  "age": {int},
  "description": {text},
  "photo": {text},
  "idUser": {int}
}`

- Borrar un perro:
  - Método: DELETE
  - Ruta: `{URL}/api/perros/{id}`

## Uso de la tabla "interaccion"

- Consultar todas las interacciones:
  - Método: GET
  - Ruta: `{URL}/api/interacciones`

- Consultar relaciones entre dos IDs:
  - Método: GET
  - Ruta: `{URL}/api/interacciones/{id1}/{id2}`

- Crear una interacción:
  - Método: POST
  - Ruta: `{URL}/api/interacciones/{id1}/{id2}`
  - JSON:`{
  "type": {"A","R"}
}`

- Actualizar una interacción entre dos IDs:
  - Método: PUT
  - Ruta: `{URL}/api/interacciones/{id1}/{id2}`
  - JSON:`{
  "type": {"A","R"}
}`

- Eliminar una interacción entre dos IDs:
  - Método: DELETE
  - Ruta: `{URL}/api/interacciones/{id1}/{id2}`

Autores:
- <span style="color:orange">**Alex Tardón Bernales**</span>
- <span style="color:blue">**Benjamín Machuca Villaseñor**</span>
