<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validacion Contraseña</title>
  <link rel='preload' href='/public/fonts/Montserrat-VariableFont_wght.ttf' as='font' type='font/ttf' crossorigin />
  <link rel='preload' href='/public/css/taxidisponibleMobile.css' as='style'
    onload='this.onload=null;this.rel="stylesheet"' />
  <noscript>
    <link rel='stylesheet' href='/public/css/taxidisponibleMobile.css' />
  </noscript>
  <link rel='stylesheet' href='/public/css/taxidisponibleTablet.css' media='(min-width: 800px)' />
</head>

<body>

  <div class="container__page">
    <div class="main-view">
      <div class="bg-img">
        <div class="bg-img-container">
          <div class="bg-img-Color"></div>
          <img class="bg-img-taxi" src="/public/images/taxi-disponible.webp" alt="taxi cuenta taxi disponible"
            loading="lazy"
            srcset="/public/images/taxi-disponibleMobile.webp 500w, /public/images/taxi-disponible.webp 810w"
            sizes="(max-width: 600px) 500px, 810px">
        </div>
      </div>
      <div class="form-content" id="olvidasteContra">
        <h1 class="title title-validacion-contra">¿Olvidaste la contraseña?</h1>
        <p class="paragraph index-paragraph">Ingresa tu correo para restablecer la contraseña.</p>
        <!-- Componente inputs -->
        <div class="inputs">
          <label class="main-label" for="email">
            <input class="main-input" type="email" id="email" placeholder="Correo electrónico">
            <svg class="icono-input-email" width="20" height="16" viewBox="0 0 20 16" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M18 1H2C1.44772 1 1 1.44772 1 2V14C1 14.5523 1.44772 15 2 15H18C18.5523 15 19 14.5523 19 14V2C19 1.44772 18.5523 1 18 1Z"
                stroke="#A9A9A9" stroke-width="2" stroke-linecap="round" />
              <path d="M1 2.5L10 8L19 2.5" stroke="#A9A9A9" stroke-width="2" stroke-linecap="round" />
            </svg>
          </label>
          <p class="parrafo-error">Por favor, ingresa un correo válido</p>
        </div>
        <a class="button-link button-green" id="btnOlvidasteContra" href="#">Restablecer contraseña <svg width="12"
            height="21" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.571427 17.6429L7.71429 10.5L0.571428 3.35714L2 0.499999L12 10.5L2 20.5L0.571427 17.6429Z"
              fill="#1B1F3B" />
          </svg></a>
        <p class="p-link">¿Ya tienes una cuenta? <a href="index.php"">Inicia sesión.</a></p>
    </div>

    <!-- Restablecer contraseña -->

    <div class=" form-content" id="restablecerContra" style="display: none">
            <h1 class="title ">Restablecer contraseña</h1>
            <p class="paragraph index-paragraph">Enviamos un código de confirmación a
              <span><b>correo@gmail.com</b></span>
            </p>
            <!-- Componente inputs -->
            <div class="inputs-restablecer">
              <label class="label-code" for="number1">
                <input class="main-input" type="text" id="number1" inputmode="numeric" pattern="[0-9]" maxlength="1">
              </label>
              <label class="label-code" for="number2">
                <input class="main-input" type="text" id="number2" inputmode="numeric" pattern="[0-9]" maxlength="1">
              </label>
              <label class="label-code" for="number3">
                <input class="main-input" type="text" id="number3" inputmode="numeric" pattern="[0-9]" maxlength="1">
              </label>
              <label class="label-code" for="number4">
                <input class="main-input" type="text" id="number4" inputmode="numeric" pattern="[0-9]" maxlength="1">
              </label>
            </div>
            <p class="parrafo-error">Por favor, ingresa un código válido</p>
            <a class="button-link button-green" id="enviarCodigo" href="#">Continuar <svg width="12" height="21"
                viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.571427 17.6429L7.71429 10.5L0.571428 3.35714L2 0.499999L12 10.5L2 20.5L0.571427 17.6429Z"
                  fill="#1B1F3B" />
              </svg></a>
            <p class="p-link ">¿No recibiste el código? <a href="#">Click para reenviar.</a></p>
            <p class="p-link p-link-m">¿Ya tienes una cuenta? <a href="index.php"">Inicia sesión.</a></p>
    </div>

    <!-- Ingresa tu nueva contraseña -->

    <div class=" form-content" id="nuevaContra" style="display: none">
                <h1 class="title title-validacion-contra">Ingresa tu nuesva contraseña</h1>
                <p class="paragraph index-paragraph">Debe tener al menos 8 caracteres.</p>

                <div class="inputs">
                  <label class="main-label" for="newPassword">
                    <input class="main-input" type="password" id="newPassword" placeholder="Nueva contraseña">
                    <svg class="icono-input" width="16" height="22" viewBox="0 0 16 22" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M8 16.5C7.46957 16.5 6.96086 16.2893 6.58579 15.9142C6.21071 15.5391 6 15.0304 6 14.5C6 13.39 6.89 12.5 8 12.5C8.53043 12.5 9.03914 12.7107 9.41421 13.0858C9.78929 13.4609 10 13.9696 10 14.5C10 15.0304 9.78929 15.5391 9.41421 15.9142C9.03914 16.2893 8.53043 16.5 8 16.5ZM14 19.5V9.5H2V19.5H14ZM14 7.5C14.5304 7.5 15.0391 7.71071 15.4142 8.08579C15.7893 8.46086 16 8.96957 16 9.5V19.5C16 20.0304 15.7893 20.5391 15.4142 20.9142C15.0391 21.2893 14.5304 21.5 14 21.5H2C1.46957 21.5 0.960859 21.2893 0.585786 20.9142C0.210714 20.5391 0 20.0304 0 19.5V9.5C0 8.39 0.89 7.5 2 7.5H3V5.5C3 4.17392 3.52678 2.90215 4.46447 1.96447C5.40215 1.02678 6.67392 0.5 8 0.5C8.65661 0.5 9.30679 0.629329 9.91342 0.880602C10.52 1.13188 11.0712 1.50017 11.5355 1.96447C11.9998 2.42876 12.3681 2.97995 12.6194 3.58658C12.8707 4.19321 13 4.84339 13 5.5V7.5H14ZM8 2.5C7.20435 2.5 6.44129 2.81607 5.87868 3.37868C5.31607 3.94129 5 4.70435 5 5.5V7.5H11V5.5C11 4.70435 10.6839 3.94129 10.1213 3.37868C9.55871 2.81607 8.79565 2.5 8 2.5Z"
                        fill="#A9A9A9" />
                    </svg>
                  </label>
                  <label class="main-label" for="ConfPassword">
                    <input class="main-input" type="password" id="confPassword"
                      placeholder="Confirma la nueva contraseña">
                    <svg class="icono-input" width="16" height="22" viewBox="0 0 16 22" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M8 16.5C7.46957 16.5 6.96086 16.2893 6.58579 15.9142C6.21071 15.5391 6 15.0304 6 14.5C6 13.39 6.89 12.5 8 12.5C8.53043 12.5 9.03914 12.7107 9.41421 13.0858C9.78929 13.4609 10 13.9696 10 14.5C10 15.0304 9.78929 15.5391 9.41421 15.9142C9.03914 16.2893 8.53043 16.5 8 16.5ZM14 19.5V9.5H2V19.5H14ZM14 7.5C14.5304 7.5 15.0391 7.71071 15.4142 8.08579C15.7893 8.46086 16 8.96957 16 9.5V19.5C16 20.0304 15.7893 20.5391 15.4142 20.9142C15.0391 21.2893 14.5304 21.5 14 21.5H2C1.46957 21.5 0.960859 21.2893 0.585786 20.9142C0.210714 20.5391 0 20.0304 0 19.5V9.5C0 8.39 0.89 7.5 2 7.5H3V5.5C3 4.17392 3.52678 2.90215 4.46447 1.96447C5.40215 1.02678 6.67392 0.5 8 0.5C8.65661 0.5 9.30679 0.629329 9.91342 0.880602C10.52 1.13188 11.0712 1.50017 11.5355 1.96447C11.9998 2.42876 12.3681 2.97995 12.6194 3.58658C12.8707 4.19321 13 4.84339 13 5.5V7.5H14ZM8 2.5C7.20435 2.5 6.44129 2.81607 5.87868 3.37868C5.31607 3.94129 5 4.70435 5 5.5V7.5H11V5.5C11 4.70435 10.6839 3.94129 10.1213 3.37868C9.55871 2.81607 8.79565 2.5 8 2.5Z"
                        fill="#A9A9A9" />
                    </svg>
                  </label>
                  <p class="parrafo-error">Contraseñas no coinciden. Por favor, asegúrate de que ambas contraseñas sean
                    iguales e inténtalo de nuevo.</p>
                </div>
                <a class="button-link button-green" id="RestablecerContra" href="#">Cambiar contraseña<svg width="12"
                    height="21" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0.571427 17.6429L7.71429 10.5L0.571428 3.35714L2 0.499999L12 10.5L2 20.5L0.571427 17.6429Z"
                      fill="#1B1F3B" />
                  </svg></a>
                <p class="p-link">¿Ya tienes una cuenta? <a href="index.php">Inicia
                    sesión.</a></p>
      </div>

    </div>

  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const btnOlvidasteContra = document.getElementById("btnOlvidasteContra");
      const btnEnviarCodigo = document.getElementById("enviarCodigo");
      const btnRestablecerContra = document.getElementById("RestablecerContra");
      const inputEmail = document.getElementById("email");
      const olvidasteContra = document.getElementById("olvidasteContra");
      const restablecerContra = document.getElementById("restablecerContra");
      const nuevaContra = document.getElementById("nuevaContra");
      const newPassword = document.getElementById("newPassword");
      const confPassword = document.getElementById("confPassword");
      const inputs = document.querySelectorAll('.label-code .main-input');
      const parrafoErrorOlvidaste = document.querySelector("#olvidasteContra .parrafo-error");
      const parrafoErrorRestablecer = document.querySelector("#restablecerContra .parrafo-error");
      const parrafoErrorNueva = document.querySelector("#nuevaContra .parrafo-error");

      btnOlvidasteContra.addEventListener("click", () => {
        const regexTuCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!regexTuCorreo.test(inputEmail.value)) {
          parrafoErrorOlvidaste.style.display = "flex";
          setTimeout(() => { parrafoErrorOlvidaste.style.display = "none"; }, 6000);
          return
        }
        olvidasteContra.style.display = "none"
        restablecerContra.style.display = "flex"
      });

      btnEnviarCodigo.addEventListener("click", () => {
        inputs.forEach(input => {
          if (input.value === "") {
            parrafoErrorRestablecer.style.display = "flex";
            setTimeout(() => { parrafoErrorRestablecer.style.display = "none"; }, 6000);
            return
          }
          restablecerContra.style.display = "none"
          nuevaContra.style.display = "flex"
        })
      })

      btnRestablecerContra.addEventListener("click", () => {
        if (newPassword.value === "" || confPassword === "") {
          parrafoErrorNueva.textContent = "Por favor, ingresa una contraseña"
          parrafoErrorNueva.style.display = "flex";
          setTimeout(() => { parrafoErrorNueva.style.display = "none"; }, 6000);
          return
        }

        if (newPassword.value !== confPassword.value) {
          parrafoErrorNueva.textContent = "Contraseñas no coinciden. Por favor, asegúrate de que ambas contraseñas sean iguales e inténtalo de nuevo."
          parrafoErrorNueva.style.display = "flex";
          setTimeout(() => { parrafoErrorNueva.style.display = "none"; }, 6000);
          return
        }
      })


      function moveFocus(e) {
        const maxLength = parseInt(this.getAttribute('maxlength'));
        const currentLength = this.value.length;

        // Verificar si se ingresó un número y se alcanzó la longitud máxima
        if (!isNaN(parseInt(this.value.slice(-1))) && currentLength >= maxLength) {
          const nextInput =
            this.parentElement.nextElementSibling.querySelector('.main-input');
          if (nextInput) {
            nextInput.focus();
          }
        }
      }

      function moveFocusDown(e) {
        const maxLength = parseInt(this.getAttribute('maxlength'));
        const currentLength = this.value.length;
        if (e.key === 'Backspace' && currentLength === 0) {
          const prevInput =
            this.parentElement.previousElementSibling.querySelector('.main-input');
          if (prevInput) {
            prevInput.focus();
          }
        }
      }

      inputs.forEach(input => {
        input.addEventListener('input', moveFocus);
        input.addEventListener('keydown', moveFocusDown);
      });

      inputs.forEach(input => {
        input.addEventListener('input', function () {
          if (input.value !== "") {
            input.classList.add("active")
          } else {
            input.classList.remove("active")
          }
          this.value = this.value.replace(/\D/g, '');
        });
      });
    });
  </script>
</body>

</html>