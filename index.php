<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Login de usuario</title>
  </head>
  <body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                    <img src="/public/carepp_logo.png" style="width: 185px;" alt="logo">
                      <h4 class="mt-1 mb-5 pb-1">Somos Carepp S.A.S</h4>
                    </div>

                    <form action="/server/login/login.php" method="post">
                      <p class="text-center mb-4">Por favor, inicie sesión en su cuenta</p>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="user">Usuario</label>
                        <input type="text" id="user" class="form-control" name="user"/>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="password">Contraseña</label>
                        <input type="password" id="password" class="form-control" name="password"/>
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-block fa-lg gradient-custom-2 mb-3 btn-hover" type="submit">Iniciar Sesión</button>
                      </div>

                    </form>

                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style="background: #1E5675;">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4" >
                    <h4 class="mb-4 text-center" style="font-size:2em;">Soluciones en IoT</h4>
                    <p class="small mb-0 text-center" style="font-size:1.2em;">En CAREPP S.A.S nos enfocamos en soluciones tecnológicas y en el
                    internet de las cosas (IoT). Nuestro software InventoryRX combina el
                    hardware RFID para optimizar la gestión de inventario. Descubre cómo 
                    funcionan y como implementamos nuestros sistemas RFID en nuestra sección exclusiva.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>