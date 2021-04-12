<?php
require_once "conexion.php";
class Usuariomodel{
    public static function insertUsuariomodel($tabla,$datos){

    
            $resultad=conection::conectar()->prepare("INSERT INTO $tabla (nombre, email, password) VALUES (:nombre, :email, :password)");

            $resultad-> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $resultad-> bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $resultad-> bindParam(":password", $datos["password"], PDO::PARAM_STR);


            if ($resultad->execute()) {
                return "ok";
            } else {
                return "error";
            }
        

    }

    public static function  selectUsuariomodel($tabla){
        $resultad=conection::conectar()->prepare("SELECT * FROM $tabla");

        $resultad->execute();
        return $resultad->fetchAll();
    }   
    public static function isRepeateMail($tabla, $item){
        $resultad=conection::conectar()->prepare("SELECT email FROM $tabla WHERE email=:item");
        $resultad->bindParam(":item",$item, PDO::PARAM_STR);
        $resultad->execute();
        return $resultad->fetch();

    }
}