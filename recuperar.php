<?php $titulo="Recuperar";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './assets/head.php'?>
    </head>
    <body>
        <?php include './assets/menu.php'; ?>
        <header class="masthead mastheadRecupear" style="background-color: black">
            <div class="container position-relative ">
                <div class="row  justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Recuperar</h1>
                            <span class="subheading">Informacion</span>
                        </div>
                    </div>
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
                    <button id="submitSearch"><i class="btn btn-secondary fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <main class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Boleta</th>
                        <th>CURP</th>
                        <th>Horario</th>
                        <th>Descargar Datos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>Blablabla</td>
                       <td>Blablabla</td>
                       <td>10:30-12:00</td>
                       <td><button class="btn btn-success"><i class="fa-solid fa-download"></i> Descargar</button></td>
                    </tr>
                </tbody>
            </table>
        </main>
        <?php include './assets/footer.php'; ?>
    </body>
</html>