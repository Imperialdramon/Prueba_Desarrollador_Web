# Prueba postulación trabajo Desarrollador Web

Este proyecto es para la postulación a una práctica, en el cuál se utiliza en Windows 10:
- XAMPP v3.3.0
- Composer v2.6.5
- PHP v8.1 o superior

La pagina web es desarrollada con html + bootstrap con algunas funcionalidades de modularización de laravel, para la barra de navegación y el pie de página.

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
         <th align="center"> Nombre, Apellidos y Correo de contacto </th>
         <th align="center"> Se crea un usuario con los datos mencionados, asignando una Id relativa al orden de creación. </th>
      </tr>
      <tr>
         <th align="center"> GET </th>
         <th align="center"> Id, Nombre, Apellidos y Correo de contacto </th>
         <th align="center"> Se ven los datos de un usuario rellenando las casillas, con diferentes casos: Si se añade Id, se buscará solo a un usuario, si no se añade, se buscarán todos los que coincidan. Adicionalmente, si se utiliza la opción de ver todos, se muestran todos los usuarios. </th>
      </tr>
      <tr>
         <th align="center"> UPDATE </th>
         <th align="center"> Id, Nombre, Apellidos y Correo de contacto </th>
         <th align="center"> Se actualizan los datos de un usuario, donde el Id es necesario para identificar al usuario y los otros datos indican los nuevos campos a utiliza, pudiendo modificar 1, 2 o 3 valores. </th>
      </tr>
      <tr>
         <th align="center"> DELETE </th>
         <th align="center"> Id </th>
         <th align="center"> Se borran los datos de un usuario, donde el Id es necesario para identificar al usuario.  </th>
      </tr>
  </tbody>
</table>
Para estas operaciones no es necesario tener alguna consideración especial, solamente en el delete que se implementa como es mencionado (soft deleting).

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
         <th align="center"> Marca, Modelo, Año, Dueño y Precio </th>
         <th align="center"> Se crea un vehículo con los datos mencionados, asignando una Id relativa al orden de creación. Además, el dueño debe existir. </th>
      </tr>
      <tr>
         <th align="center"> GET </th>
         <th align="center"> Id, Marca, Modelo, Año, Dueño y Precio </th>
         <th align="center"> Se ven los datos de un vehículo rellenando las casillas, con diferentes casos: Si se añade Id, se buscará solo a un vehpiculo, si no se añade, se buscarán todos los que coincidan. Adicionalmente, si se utiliza la opción de ver todos, se muestran todos los vehículos. </th>
      </tr>
      <tr>
         <th align="center"> UPDATE </th>
         <th align="center"> Id, Marca, Modelo, Año, Dueño y Precio </th>
         <th align="center"> Se actualizan los datos de un vehículo, donde el Id es necesario para identificar al usuario y los otros datos indican los nuevos campos a utiliza, pudiendo modificar 1, 2 o 3 valores. Además, el dueño debe existir. </th>
      </tr>
      <tr>
         <th align="center"> DELETE </th>
         <th align="center"> Id </th>
         <th align="center"> Se borran los datos de un usuario, donde el Id es necesario para identificar al vehículo. </th>
      </tr>
  </tbody>
</table>
Para poder crear un vehículo se recuerda que se debe indicar un usario válido, puesto que es un parámetro requerido. Además, se implementa DELETE como es mencionado (soft deleting).

## Consideraciones adicionales

