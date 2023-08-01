<?php session_start();
$_SESSION["validar"] = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">The Lotus Team</h4>
                      </div>
      
                      <form action="admin/validar.php" method="post" onsubmit="return validacion()" >
                        <p>Por favor ingrese a su cuenta.</p>
      
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Nombre</label>
                          <input type="text" name="nombre" class="nombre form-control"
                            placeholder="Nombre de usuario" />
                          
                          <div class="mensaje">        
                         </div>
                        </div>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Contreseña</label>
                          <input type="password" name="contraseña" class="contrasena form-control" />
                          
                          <div class="mensaje2">            
                        </div>

                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <input  class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"  name="enviar" type="submit" value="Ingresar">
                            <?php if(isset($_SESSION["error"])){
                                    echo $_SESSION["error"];
                                    unset($_SESSION["error"]); 
                                }
                            ?>
                          <a class="text-muted" href="#!">¿Te olvidaste la contraseña?</a>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                          <input type="submit" value="Crear una cuenta" name="crear" class="btn btn-outline-danger">
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Trabajamos para darte el futuro de mañana</h4>
                      <p class="small mb-0">Equipo completo dedicado darle el servicio y atención que usted necesita para poder comprar cualquier producto de que el usted quiera. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque earum inventore dolor rerum doloribus reprehenderit veritatis expedita nulla. Non ipsum expedita commodi rem? Quam iusto illo est fuga quidem aspernatur.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
      <script src="js/validar.js" > 
    </script>
    
</body>
</html>