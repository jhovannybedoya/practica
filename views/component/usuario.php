<h2>hola soy usuario</h2>
<img src="" alt="">

<?php
    $usuario = new UsuarioController();
    $usuario ->insertUsuarioController();
?> 
<form action="" method="POST">

<label for="nombre">nombre</label> 
<input type="text" name="nombre" id="" placeholder="nombre" required>

<label for="correo">correo</label>
<input type="email" name="email" id="" placeholder="correo electronico"required>

<label for="password">password</label>
<input type="password" name="password" id="" placeholder="password" required>

<button  type="submit">regitrar</button>

</form>