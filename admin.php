<?php
  session_start();
  if(isset($_SESSION['correo'])==0 || isset($_SESSION['contrasena'])==0){
    header('location:login.php');
  }
?>
<?php $titulo="Admin";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './assets/head.php'?>
    </head>
    <body>
        <?php include './assets/menuAdmin.php'; ?>
        <header class="masthead" style="background-color: black; color:white">
              <div class="container justify-content-center">
                    <div class="site-heading">
                            <h1>Admin</h1>
                            <p><?php echo($_SESSION['nombre']) ?></p>
                    </div>
              </div>
        </header>
        <div class="container">
            <form action="" class="contactForm">
                <div class="d-flex flex-row">
                    <div class="form-floating">
                        <input type="text" placeholder="Buscar" class="form-control">
                        <label for=""><i class="fa-solid fa-magnifying-glass"></i> Buscar por CURP</label>
                    </div>
                    <button id="submitSearch"><i class="btn btn-success fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <main>
            <table class="table ">
                <thead class="text-uppercase">
                    <th>nombre</th>
                    <th>Apellido</th>
                    <th>Preboleta</th>
                    <th>Curp</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Escuela</th>
                    <th>Promedio</th>
                    <th>Horario</th>
                </thead>
                <tbody>
                    <td><input type="text" > <button class="btn btn-danger">Modificar</button></td>
                    <td><input type="text" > <button class="btn btn-danger">Modificar</button></td>
                    <td><input type="text" > <button class="btn btn-danger">Modificar</button></td>
                    <td><input type="text" > <button class="btn btn-danger">Modificar</button></td>
                    <td><input type="text" > <button class="btn btn-danger">Modificar</button></td>
                    <td><input type="text" > <button class="btn btn-danger">Modificar</button></td>
                    <td><input type="text" > <button class="btn btn-danger">Modificar</button></td>
                    <td><input type="text" > <button class="btn btn-danger">Modificar</button></td>
                    <td><input type="text" > <button class="btn btn-danger">Modificar</button></td>
                    <td><input type="text" > <button class="btn btn-danger">Modificar</button></td>
                </tbody>
            </table>
        </main>
        <?php include './assets/footer.php'; ?>
    </body>
</html>