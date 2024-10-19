<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Formulario de inscripción</title>
</head>
<body>
    <div class="form-container">
    <form id="multiStepForm" class="container-form" action="../controllers/InscripcionController.php" method="POST" enctype="multipart/form-data">
            <h2 class="title-form">Formulario de inscripción</h2>
            <div class="form-step" data-step="1">
                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control required" type="text" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" type="text" name="primer_apellido" placeholder="Primer Apellido" required>
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" type="text" name="segundo_apellido" placeholder="Segundo Apellido" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <input class="form-control" type="tel" name="telefono_codigo" placeholder="Código" required><br>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="tel" name="telefono" placeholder="Teléfono" required><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="email" name="email" placeholder="Email" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="file" name="foto" accept="image/*" required><br>   
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="profesion" placeholder="Profesión" required>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="especialidad" placeholder="Especialidad" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="nacionalidad" placeholder="Nacionalidad" required>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="residencia" placeholder="Residencia" required>
                    </div>
                </div>
            </div>
           
           
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../JS/style_form.js"></script>
    
</body>
</html>
