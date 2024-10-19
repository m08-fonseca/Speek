<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../Landing/web/css/styles.css">
    <link rel="stylesheet" href="../Landing/web/css/bootstrap.css">
    <link rel="stylesheet" href="../Landing/web/css/fontawesome-all.css">
    <link rel="stylesheet" href="../Landing/web/css/swiper.css">
    <link rel="stylesheet" href="../Landing/web/css/magnific-popup.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Formulario de inscripción</title>
</head>
<body>

     <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="../img/FullLogo_Transparent (1).png" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">FQA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Blog</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Nosotros</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Términos y Condiciones</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Política de privacidad</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contacto</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-5">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../../views/select_user.php">Registrarse <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../../views/login.php">Login</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="" aria-label="iconos">
                        <i class="fas fa-circle fa-stack-2x tiktok"></i>
                        <i class="fab fa-tiktok fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="" aria-label="iconos">
                        <i class="fas fa-circle fa-stack-2x linkedin"></i>
                        <i class="fab fa-linkedin-in fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

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
                        <p>Foto</p>
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
            <div class="form-step" data-step="2">
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="formacion" placeholder="Formación Profesional" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <select class="form-control" name="experiencia"><br>
                            <option value="">Años de experiencia como psicólogo clínico</option>
                            <option value="1-3">1 - 3 años</option>
                            <option value="4-6">4 - 6 años</option>
                            <option value="6+">6 años o más</option>
                        </select><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="institucion" placeholder="Institución" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control" name="idiomas"><br>
                            <option value="">Idioma</option>
                            <option value="español">Español</option>
                            <option value="ingles">Inglés</option>
                            <option value="frances">Francés</option>
                        </select><br>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="nivel_idioma"><br>
                            <option value="">Nivel de idioma</option>
                            <option value="basico">Básico</option>
                            <option value="profesional">Profesional</option>
                            <option value="nativo">Nativo</option>
                        </select><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="text" name="num_profesional" placeholder="Número de cédula, licencia o matrícula profesional" required><br>
                    </div>
                </div>
            </div>
            <div class="form-step" data-step="3">
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="tarifa" placeholder="Tarifa de consulta" required>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="url" name="linkedin" placeholder="Enlace del perfil de LinkedIn" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="file" name="titulos" required><br>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12 d-flex align-items-center">
                    <input type="checkbox" name="terminos" required class="me-2">
                    <label class="mb-0">Acepto los términos y condiciones</label>
                </div>
                </div>
                <label>Captcha:</label><br>
                <!-- Agrega aquí tu código de captcha -->
            </div>
            <div class="form-navigation">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-secondary">Atrás</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-primary">Adelante</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../JS/style_form.js"></script>
    <!-- Scripts -->
    <script src="../Landing/web/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../Landing/web/js//popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="../Landing/web/js/s/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../Landing/web/js//jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../Landing/web/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../Landing/web/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../Landing/web/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../Landing/web/js/scripts.js"></script> <!-- Custom scripts -->
    
</body>
</html>
