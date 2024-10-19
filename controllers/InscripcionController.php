<?php
require_once '../models/InscripcionModel.php';
require_once '../config/db.php';

// Establecer el tipo de contenido de la respuesta como JSON
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Crear una instancia del controlador de inscripción
    $inscripcionController = new InscripcionController();
    
    // Intentar registrar la inscripción
    $result = $inscripcionController->registrar($_POST, $_FILES);
    
    // Verificar el resultado del registro
    if ($result['success']) {
        // Si el registro fue exitoso, devolver un JSON con éxito
        echo json_encode(['success' => true]);
    } else {
        // Si hubo un error durante el registro, devolver un JSON con el mensaje de error
        echo json_encode(['success' => false, 'message' => $result['message']]);
    }
} else {
    // Si la solicitud no es POST, devolver un JSON con un mensaje de error
    echo json_encode(['success' => false, 'message' => 'Método de solicitud no permitido']);
}

class InscripcionController {
    public function registrar($postData, $fileData) {
        // Crear una instancia del modelo de inscripción
        $inscripcionModel = new InscripcionModel();
        
        // Intentar registrar la inscripción y capturar cualquier excepción
        try {
            // Realizar el registro y devolver un mensaje de éxito si tiene éxito
            $inscripcionModel->registrar($postData, $fileData);
            return ['success' => true];
        } catch (Exception $e) {
            // En caso de error, devolver un mensaje de error
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
?>
