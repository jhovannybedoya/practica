<?php

class UsuarioController{
    public static function insertUsuarioController(){
        
        if(isset($_POST["nombre"])){
            
            $tabla="prueba";

            $datos=array(
                "nombre"=>$_POST["nombre"],
                "email"=>$_POST["email"],
                "password"=>$_POST["password"],
            );
            $request = Usuariomodel::insertUsuariomodel($tabla,$datos);

            //var_dump($request);
            if ($request== "ok") {
                echo "
            
            <script>
            Swal.fire({
                icon: 'success',
                confirmButtonText: `Ok`,
                text: 'Registro exitoso!',
                }).then((result) => {
                if (result.isConfirmed) {
                window.location = 'usuario';
                }
                }) 
            </script>";
            }
            else {
                echo "
            
            <script>
            Swal.fire({
                icon: 'error',
                title: 'error!',
                text: ' tu registro no fue exitoso',
                
              })
            </script>";
            }

            
            
        }
    }

    public static function  modificarUsuariocontroller(){
        
    }


}
