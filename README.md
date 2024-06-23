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
Get: dominio.com/api/Estudiantes // Devuelve una lista completa de los estudiantes</br></br>
post: dominio.com/api/Estudiantes // envia dato para agregar al registro : nombre, apellido, cedula, fecha_nacimiento</br></br>
Get: dominio.com/api/Estudiantes/{id} // envia el id de un registro para que devuelva el registro</br></br>
put: dominio.com/api/Estudiantes/{id} // enviar el id de un registro los datos nombre, apellido, cedula, fecha_nacimiento, para modificar el registro</br></br>
delete: dominio.com/api/Estudiantes/id // envia el id para eliminar el registro</br></br>
post: dominio.com/api/Estudiantes/Resete // envia el dato baja = baja para eliminar todos los registros</br></br>
## Materia:
Get: dominio.com/api/Materia // Devuelve una lista completa de las materias</br></br>
post: dominio.com/api/Materia // envia dato para agregar al registro : nombre</br></br>
Get: dominio.com/api/Materia/{id} // envia el id de un registro para que devuelva el registro</br></br>
put: dominio.com/api/Materia/{id} // enviar el id de un registro los datos nombre, para modificar el registro</br></br>
delete: dominio.com/api/Materia/id // envia el id para eliminar el registro</br></br>
post: dominio.com/api/Materia/Resete // envia el dato baja = baja para eliminar todos los registros</br></br>
## Calificaciones:
Get: dominio.com/api/Calificaciones // Devuelve una lista completa de las calificaciones</br></br>
post: dominio.com/api/Calificaciones // envia dato para agregar al registro : nota, estudiantes_id, materia_id</br></br>
Get: dominio.com/api/Calificaciones/{id} // envia el id de un registro para que devuelva el registro</br></br>
put: dominio.com/api/Calificaciones/{id} // enviar el id de un registro los datos nota, estudiantes_id, materia_id, para modificar el registro</br></br>
delete: dominio.com/api/Calificaciones/id // envia el id para eliminar el registro</br></br>
post: dominio.com/api/Calificaciones/Resete // envia el dato baja = baja para eliminar todos los registros</br></br>

