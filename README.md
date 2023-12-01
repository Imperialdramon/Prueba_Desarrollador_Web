# Prueba postulación trabajo Desarrollador Web

Este proyecto es para la postulación a una práctica, en el cuál se utiliza en Windows 10:
- XAMPP v3.3.0
- Composer v2.6.5
- PHP v8.1 o superior

La pagina web es desarrollada con "html + bootstrap" con algunas funcionalidades de modularización de laravel, para la barra de navegación y el pie de página. A continuación se presenta la información relevante sobre las componentes de la tabla:

## Operaciones del CRUD para Usuario

En la siguiente tabla se presentan las operaciones del CRUD respecto al usuario, con los parámetros requeridos y la descripción del funcionamiento:
<table>
  <tbody>
      <tr>
         <th align="center"> Operación </th>
         <th align="center"> Datos requeridos </th>
         <th align="center"> Descripción </th>
      </tr>
      <tr>
         <th align="center"> POST </th>
         <th align="justify"> Nombre, Apellidos y Correo de contacto </th>
         <th align="justify"> Se crea un usuario con los datos mencionados, asignando una Id relativa al orden de creación. </th>
      </tr>
      <tr>
         <th align="center"> GET </th>
         <th align="justify"> Id, Nombre, Apellidos y Correo de contacto </th>
         <th align="justify"> Se ven los datos de todos los usuarios, siguiendo el orden presentado. </th>
      </tr>
      <tr>
         <th align="center"> UPDATE </th>
         <th align="justify"> Id, Nombre, Apellidos y Correo de contacto </th>
         <th align="justify"> Se actualizan los datos de un usuario, donde el Id es necesario para identificar al usuario y los otros datos indican los nuevos campos a utiliza, pudiendo modificar de 1 a 3 valores. </th>
      </tr>
  </tbody>
</table>

## Operaciones del CRUD para Vehículo

En la siguiente tabla se presentan las operaciones del CRUD respecto al vehículo, con los parámetros requeridos y la descripción del funcionamiento:
<table>
  <tbody>
      <tr>
         <th align="center"> Operación </th>
         <th align="center"> Datos requeridos </th>
         <th align="center"> Descripción </th>
      </tr>
      <tr>
         <th align="center"> POST </th>
         <th align="justify"> Marca, Modelo, Año, Dueño y Precio </th>
         <th align="justify"> Se crea un vehículo con los datos mencionados, asignando una Id relativa al orden de creación. Además, el dueño debe existir. </th>
      </tr>
      <tr>
         <th align="center"> GET </th>
         <th align="justify"> Id, Marca, Modelo, Año, Dueño y Precio </th>
         <th align="justify"> Se ven los datos de todos los vehículos, siguiendo el orden presentado. </th>
      </tr>
      <tr>
         <th align="center"> UPDATE </th>
         <th align="justify"> Id, Marca, Modelo, Año, Dueño y Precio </th>
         <th align="justify"> Se actualizan los datos de un vehículo, donde el Id es necesario para identificar al usuario y los otros datos indican los nuevos campos a utiliza, pudiendo modificar de 1 a 5 valores. Además, el dueño debe existir. </th>
      </tr>
  </tbody>
</table>

## Consideraciones adicionales
- Para manejar el registro de los anteriores dueños, se empleó el uso de una tercera tabla que utiliza las id de los vehículos y dueños además de una propia.
- Los test unitarios presentados actualmente presentan errores, por lo que no es recomendable utilizarlos.
- Para lograr realizar la ejecución correcta, es necesario migrar las tablas. Esto se logra con el comando "php artisan migrate", donde además se debe definir la conexión con la base de datos creada (en mi caso con XAMPP).
- Para visualizar la base de datos, se ha utilizado MySQL Workbench, con el fin de hacer un seguimiento más directo sobre los datos y revisar su correcto almacenamiento.
- La mayor parte de las "páginas", están desarrolladas aprovechando la posibilidad de modularización de laravel, pero con diseños muy básicos y en ocasiones no se logra optimizar esto (un buen cambio habría sido definir correctamente los archivos CSS).
