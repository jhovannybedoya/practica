<?php
// modelos
require_once "model/usuario.Model.php";


//controladores
require_once "controlle/usuario.controller.php";
require_once "controlle/template.controller.php";
$template = new TemplateController();

$template -> template();