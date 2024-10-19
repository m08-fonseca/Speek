<?php

// Incluir los archivos necesarios
require_once '../config/db.php';
require_once '../models/InscripcionModel.php';
require_once '../controllers/InscripcionController.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inscripcionController = new InscripcionController();
    $inscripcionController->registrar($_POST, $_FILES);
} else {
    require '../views/inscripcion.php';
}

?>


