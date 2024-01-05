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
            <form action="" class="contactForm" id='buqueda'>
                <div class="d-flex flex-row">
                    <div class="form-floating">
                        <input name="curp" type="text" placeholder="Buscar" class="form-control">
                        <label for=""><i class="fa-solid fa-magnifying-glass"></i> Buscar por CURP</label>
                    </div>
                    <button id="submitSearch"><i class="btn btn-success fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <main>
            <table class="table ">
                <thead class="text-uppercase" id="admin-head">
                </thead>
                <tbody id="admin-table">
                </tbody>
            </table>
        </main>
        <?php include './assets/footer.php'; ?>
        <script type="module" src="js/Admin.js"></script>
    </body>
</html>