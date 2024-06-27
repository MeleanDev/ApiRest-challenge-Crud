# Descripción

Los docentes de un colegio desean un sistema para cargar las calificaciones (notas) de sus
alumnos. El Frontend ya está terminado, con lo cual su tarea será desarrollar una API REST para el backend.

Tarea:
1. Realizar endpoints para CRUD (Alta, Baja, Modificación, Borrado) de las calificaciones y alumnos.
2. Realizar un endpoint que devuelva todas las calificaciones.
3. Realizar un endpoint que devuelva las calificaciones de un alumno en particular.

Información necesaria:
3. Para la base de datos debe utilizar mysql.</br>
4. Es necesario utlizar laravel (modo API REST).</br>
5. El formato y la información de los JSON quedan a su libre criterio.</br>
6. La estructuración del proyecto queda a su criterio.</br></br>

## Ejercico Completado!!</br></br>
### Rutas:</br>
## Estudiante:
| Datos a enviar                                                                                                    | Metodo        | Ruta                    |
|:------------------------------------------------------------------------------------------------------------------|:-------------:|------------------------:|
| Esta devuelve una lista de los estudiantes                                                                        | **GET**       | api/Estudiantes         |
| envia dato para agregar al registro : nombre, apellido, cedula, fecha_nacimiento                                  | **POST**      | api/Estudiantes         |
| envia el id de un registro para que devuelva el registro                                                          | **GET**       | api/Estudiantes/{id}    |
| enviar el id de un registro los datos nombre, apellido, cedula, fecha_nacimiento, para modificar el registro      | **PUT**       | api/Estudiantes/{id}    |
| envia el id para eliminar el registro                                                                             | **DELETE**    | api/Estudiantes/{id}    |
| envia el dato (baja = baja) para eliminar todos los registros                                                     | **POST**      | api/Estudiantes/Resete  |

## Materia:
| Datos a enviar                                                               | Metodo        | Ruta                 |
|:-----------------------------------------------------------------------------|:-------------:|---------------------:|
| Esta devuelve una lista de los materias                                      | **GET**       | api/Materias         |
| envia dato para agregar al registro : nombre                                 | **POST**      | api/Materias         |
| envia el id de un registro para que devuelva el registro                     | **GET**       | api/Materias/{id}    |
| enviar el id de un registro los datos nombre para modificar el registro      | **PUT**       | api/Materias/{id}    |
| envia el id para eliminar el registro                                        | **DELETE**    | api/Materias/{id}    |
| envia el dato (baja = baja) para eliminar todos los registros                | **POST**      | api/Materias/Resete  |

## Calificaciones:
| Datos a enviar                                                                                                   | Metodo        | Ruta                       |
|:-----------------------------------------------------------------------------------------------------------------|:-------------:|---------------------------:|
| Esta devuelve una lista de los productos                                                                         | **GET**       | api/Calificaciones         |
| envia dato para agregar al registro : nota, estudiantes_id, materia_id                                           | **POST**      | api/Calificaciones         |
| envia el id de un registro para que devuelva el registro                                                         | **GET**       | api/Calificaciones/{id}    |
| enviar el id de un registro los datos nota, estudiantes_id, materia_id, para modificar el registro               | **PUT**       | api/Calificaciones/{id}    |
| envia el id para eliminar el registro                                                                            | **DELETE**    | api/Calificaciones/{id}    |
| envia el dato (baja = baja) para eliminar todos los registros                                                    | **POST**      | api/Calificaciones/Resete  |

