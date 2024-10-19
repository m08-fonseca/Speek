<?php
require_once '../config/db.php';


class InscripcionModel {
    private $conexion;

    public function __construct() {
        global $servername, $username, $password, $dbname;
        $dsn = "mysql:host=$servername;dbname=$dbname";

        try {
            $this->conexion = new PDO($dsn, $username, $password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
    }

    public function registrar($datos, $files) {
        try {
            // Verifica y procesa archivos subidos
            $foto = isset($files['foto']) && $files['foto']['error'] === UPLOAD_ERR_OK ? file_get_contents($files['foto']['tmp_name']) : null;
            $titulos = isset($files['titulos']) && $files['titulos']['error'] === UPLOAD_ERR_OK ? file_get_contents($files['titulos']['tmp_name']) : null;

            // Verifica que 'terminos' sea un valor booleano adecuado
            $terminos = isset($datos['terminos']) && $datos['terminos'] == 'on' ? 1 : 0;

            $sql = "INSERT INTO inscripciones (nombre, primer_apellido, segundo_apellido, telefono, email, foto, profesion, especialidad, nacionalidad, residencia, formacion, experiencia, institucion, idiomas, nivel_idioma, titulos, num_profesional, tarifa, linkedin, terminos) 
                    VALUES (:nombre, :primer_apellido, :segundo_apellido, :telefono, :email, :foto, :profesion, :especialidad, :nacionalidad, :residencia, :formacion, :experiencia, :institucion, :idiomas, :nivel_idioma, :titulos, :num_profesional, :tarifa, :linkedin, :terminos)";

            $stmt = $this->conexion->prepare($sql);

            // Vincula parámetros
            $stmt->bindParam(':nombre', $datos['nombre']);
            $stmt->bindParam(':primer_apellido', $datos['primer_apellido']);
            $stmt->bindParam(':segundo_apellido', $datos['segundo_apellido']);
            $stmt->bindParam(':telefono', $datos['telefono']);
            $stmt->bindParam(':email', $datos['email']);
            $stmt->bindParam(':foto', $foto);
            $stmt->bindParam(':profesion', $datos['profesion']);
            $stmt->bindParam(':especialidad', $datos['especialidad']);
            $stmt->bindParam(':nacionalidad', $datos['nacionalidad']);
            $stmt->bindParam(':residencia', $datos['residencia']);
            $stmt->bindParam(':formacion', $datos['formacion']);
            $stmt->bindParam(':experiencia', $datos['experiencia']);
            $stmt->bindParam(':institucion', $datos['institucion']);
            $stmt->bindParam(':idiomas', $datos['idiomas']); 
            $stmt->bindParam(':nivel_idioma', $datos['nivel_idioma']);
            $stmt->bindParam(':titulos', $titulos);
            $stmt->bindParam(':num_profesional', $datos['num_profesional']);
            $stmt->bindParam(':tarifa', $datos['tarifa']);
            $stmt->bindParam(':linkedin', $datos['linkedin']);
            $stmt->bindParam(':terminos', $terminos);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Error al registrar: ' . $e->getMessage();
            return false;
        }
    }
}
?>
