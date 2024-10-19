document.addEventListener('DOMContentLoaded', function () {
    showStep(currentStep);
});

let currentStep = 0;

function showStep(n) {
    const steps = document.getElementsByClassName('form-step');
    for (let i = 0; i < steps.length; i++) {
        steps[i].style.display = 'none';
    }
    steps[n].style.display = 'block';

    if (n === 0) {
        document.getElementById('prevBtn').style.display = 'none';
    } else {
        document.getElementById('prevBtn').style.display = 'inline';
    }

    if (n === (steps.length - 1)) {
        document.getElementById('nextBtn').innerHTML = 'Enviar';
    } else {
        document.getElementById('nextBtn').innerHTML = 'Adelante';
    }
}

function nextPrev(n) {
    const steps = document.getElementsByClassName('form-step');
    //steps[currentStep].style.display = 'hidden';
    currentStep += n;

    if (currentStep >= steps.length) {
        submitForm();
        return false;
    }

    showStep(currentStep);
}

function submitForm() {
    const form = document.getElementById('multiStepForm');
    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        if (data.success) {
            form.reset();
            Swal.fire({
                icon: 'success',
                title: '¡Registro exitoso!',
                text: 'Tu formulario ha sido enviado correctamente.'
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: '¡Error!',
                text: data.message || 'Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo más tarde.'
            });
        }
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
        Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: 'Hubo un problema al enviar el formulario. Por favor, inténtalo de nuevo más tarde.'
        });
    });
}
