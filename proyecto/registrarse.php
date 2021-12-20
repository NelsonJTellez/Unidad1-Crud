
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">">
    <title>Registrarse</title>
</head>
<body>
    
        <div class="modal-body modal-dialog">
            <div class="container col-lg-11">
                <div class="modal-content col-lg-9 bg-light">
                    <!-----botones de cambio-->
                    <!-- <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <!------------hasta aqui-->--
                        <br>
                       
                <h1 class="text-center blanco">Registro</h1>
    <!-------------------formulario----------------------------------->
                <form class="text-center bg-light" action="registro.php" method="POST">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
                    <div class="mb-3"><br>

                      <label for="exampleInputEmail1" class="form-label blanco">Correo Electronico</label>
                      <input type="text" class="form-control  bg-light" name="txtNombre" >

                    </div>
                    <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Usuario</label>
                        <input type="text" class="form-control bg-light " name="txtUsuario" placeholder="Nombre de usuario" >

                      </div>
                      <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label blanco">Contraseña</label>
                        <input type="text" class="form-control bg-light " name="txtContraseña" placeholder="contraseña" >

                      </div>
                    <button type="submit" class="btn btn-success" >Registrarse</button>
                    <br>
                    <br>
                
                    <a href="home.php" class="btn btn-secondary btn-mg" >volver</a>
                    
                     
                  </form><br>
                  <!-----------hasta aqui form----------------------->
            </div>
            </div> 
        </div>
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>