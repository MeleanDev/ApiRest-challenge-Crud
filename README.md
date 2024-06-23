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
Get: dominio.com/Estudiantes // Devuelve una lista completa de los estudiantes</br>
post: dominio.com/Estudiantes // envia dato para agregar al registro : nombre, apellido, cedula, fecha_nacimiento</br>
Get: dominio.com/Estudiantes/{id} // envia el id de un registro para que devuelva el registro</br>
put: dominio.com/Estudiantes/{id} // enviar el id de un registro los datos nombre, apellido, cedula, fecha_nacimiento, para modificar el registro</br>
delete: dominio.com/Estudiantes/id // envia el id para eliminar el registro</br>
post: dominio.com/Estudiantes/Resete // envia el dato baja = baja para eliminar todos los registros</br></br></br> 
## Materia:
Get: dominio.com/Materia // Devuelve una lista completa de las materias</br>
post: dominio.com/Materia // envia dato para agregar al registro : nombre</br>
Get: dominio.com/Materia/{id} // envia el id de un registro para que devuelva el registro</br>
put: dominio.com/Materia/{id} // enviar el id de un registro los datos nombre, para modificar el registro</br>
delete: dominio.com/Materia/id // envia el id para eliminar el registro</br>
post: dominio.com/Materia/Resete // envia el dato baja = baja para eliminar todos los registros</br></br></br> 
## Calificaciones:
Get: dominio.com/Calificaciones // Devuelve una lista completa de las calificaciones</br>
post: dominio.com/Calificaciones // envia dato para agregar al registro : nota, estudiantes_id, materia_id</br>
Get: dominio.com/Calificaciones/{id} // envia el id de un registro para que devuelva el registro</br>
put: dominio.com/Calificaciones/{id} // enviar el id de un registro los datos nota, estudiantes_id, materia_id, para modificar el registro</br>
delete: dominio.com/Calificaciones/id // envia el id para eliminar el registro</br>
post: dominio.com/Calificaciones/Resete // envia el dato baja = baja para eliminar todos los registros</br></br></br> 

