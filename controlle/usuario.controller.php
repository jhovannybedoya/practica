<?php

class UsuarioController{
    public static function insertUsuarioController(){
        
        if(isset($_POST["email"])){
            
            
            $tabla="prueba";
            $item=$_POST["email"];

            $consult=Usuariomodel::isRepeateMail($tabla, $item);
            if (!$consult) {
                var_dump($consult);
            
                $datos=array(
                "nombre"=>$_POST["nombre"],
                "email"=>$_POST["email"],
                "password"=>$_POST["password"],
            );
                $request = Usuariomodel::insertUsuariomodel($tabla, $datos);

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
                } else {
                    echo "
            
            <script>
            Swal.fire({
                icon: 'error',
                title: 'error!',
                text: ' tu registro no fue exitoso',
                
              })
            </script>";
                }
        }else{
            echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'error',
                text: '! TU USUARIO EXISTE!',
                footer: '<a href>Why do I have this issue?</a>'
              })
            </script>
            ";
        }

            
            
        }
    }

    public static function  selectUsuariocontroller(){
        $tabla="prueba";
       
        $query=Usuariomodel::selectUsuariomodel($tabla);
        
        foreach ($query as $datos => $value) {
            echo "<tr>";
            echo "<td>".$value["id"]."</td>";
            echo "<td>". $value["nombre"]."</td>";
            echo "<td>". $value["email"]."</td>";
            echo "<td>". $value["password"]."</td>";
            echo "<td>
                <button class = 'actualizar'idActualizar='{$value["id"]}'>Actualizar</button> 
                <button class='borrar' idBorrar='{$value["id"]}'> Eliminar</button>
                 </td>";
            echo "</tr>";
        }
    }
    

    



}
