<h3>estas es la lista de los usuarios</h3>


 <table width="50%" border="0" align="center">
    <thead >
      
      <th class="primera_fila">Id</th>
      <th class="primera_fila">Nombre</th>
      <th class="primera_fila">email</th>
      <th class="primera_fila">password</th>
      <th class="primera_fila">acciones</th>
      
    </thead> 
    <tbody>

      <?php
          $usuario = new UsuarioController();
          $usuario ->selectUsuarioController();
      ?> 

    </tbody>

   
		
   
  </table>