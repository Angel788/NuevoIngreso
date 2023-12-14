<?php $titulo="Registro";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './assets/head.php'?>
    </head>
    <body>
        <?php include './assets/menu.php'; ?>
        <header class="masthead" style="background-image: url('assets/img/examen.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Registro</h1>
                            <span class="subheading">Examen de Nuevo Ingreso</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="my-5">
                            <form id="Formulario-Registro">
                                <div id="form-data">
                                <div class="block-form">
                                    <h3><i class="fa-solid fa-id-card"></i> Indentidad</h3>
                                <div class="form-floating">
                                    <input type="text" placeholder="Nombre" type="text" id="nombre" name="nombre"class="form-control" require>
                                    <label for="nombre">Nombre</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Nombre requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="apellido" placeholder="Apellido" type="text" id="apellido" class="form-control" require>
                                    <label for="nombre">Apellido</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="boleta" placeholder="Preboleta" type="text" id="pm" class="form-control" require>
                                    <label for="nombre">Preboleta</label>
                                    <div class="invalid-feedback" data-sb-feedback="boleta">La boleta no es valida.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="curp" placeholder="Apellido"  id="curp" class="form-control" require>
                                    <label for="nombre">Curp</label>
                                    <div class="invalid-feedback" data-sb-feedback="curp">El curp es invalido.</div>
                                </div>
                                </div>
                                <div class="block-form">
                                    <h3><i class="fa-solid fa-address-book"></i> Contacto</h3>
                                    <div class="form-floating">
                                        <input name="correo" placeholder="Email" type="email" id="coreo" class="form-control" require>
                                        <label for="nombre"><i class="fa-solid fa-envelope"></i> Email</label>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El correo es invalido.</div>
                                    </div>
                                    <div class="form-floating">
                                        <input  placeholder="Telefono" name="numero" type="number" id="telefono" class="form-control" require>
                                        <label for="nombre"><i class="fa-solid fa-phone"></i> Telefono</label>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El telefono es invalido.</div>
                                    </div>
                                </div>
                                <div class="block-form">
                                    <h3><i class="fa-solid fa-globe"></i> Procedencia</h3>
                                    <div class="form-floating">
                                        <select name="estado" id="estado" class="form-select obd">
                                            <option value="Mexico">Mexico</option>
                                        </select>
                                        <label for="nombre">Estado</label>
                                    </div>
                                    <div class="form-floating">
                                        <select name="escuela" id="escuela" class="form-select obd">
                                            <option value="Cecyt-8">Cecyt-8</option>
                                        </select>
                                        <label for="escuela"><i class="fa-solid fa-school"></i> Escuela</label>
                                        <div class="invalid-feedback" data-sb-feedback="escuela">La escuela es invalida.</div>
                                    </div>
                                    <div class="">
                                        <label for="Otra">Otra</label>
                                        <input type="checkbox"class="obd form-check" id="otraEscuela">
                                        <div class="invalid-feedback" data-sb-feedback="escuela">La escuela es invalida.</div>
                                    </div>
                                    <div class="form-floating"id="OtraEscuela">
                                        <input type="text" name="escuela2" id="" class="obd form-control" value="">
                                        <label for="escuelas2"><i class="fa-solid fa-school"></i> Otra Escuela</label>
                                        <div class="invalid-feedback" data-sb-feedback="escuela">La escuela es invalida.</div>
                                    </div>
                                </div>
                                <div class="block-form">
                                    <h3>Dificultades</h3>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Discapacidad Motriz</label>
                                        <input name="discapacidadMotriz" placeholder="Discapacidad" type="checkbox"  class="form-check obd" require>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El telefono es invalido.</div>
                                    </div>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Discapacidad Auditiva</label>
                                        <input name="discapacidadAuditiva" placeholder="Discapacidad" type="checkbox"  class="form-check obd" require>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El telefono es invalido.</div>
                                    </div>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Discapacidad Visual</label>
                                        <input name="discapacidadVisual" placeholder="Discapacidad" type="checkbox"  class="form-check obd" require>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El telefono es invalido.</div>
                                    </div>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Otra Discapacidad</label>
                                        <input name="otraDiscapacidadC" placeholder="Discapacidad" type="checkbox" id="otraDiscapacidadCheck" class="form-check obd" require>
                                    </div>
                                    <div class="form-floating" id="otraDiscapacidadCampo" style="display: none;">
                                        <input type="text" name="otraDiscapacidad" id="" class="obd form-control" value="">
                                        <label for="escuelas2"><i class="fa-solid fa-school"></i> Otra Escuela</label>
                                        <div class="invalid-feedback" data-sb-feedback="escuela">La escuela es invalida.</div>
                                    </div>
                                </div>
                                <div class="form-block">
                                    <h3>Promedio</h3>
                                    <div class="form-floating">
                                        <input name="promedio" placeholder="Promedio" type="number" id="promedio" class="form-control" require>
                                        <label for="nombre"><i class="fa-solid fa-graduation-cap"></i> Promedio</label>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El telefono es invalido.</div>
                                    </div>
                                </div>
                                <button  class="btn btn-danger text-uppercase" id="enviarFormulario"><i class="fa-solid fa-paper-plane"></i> Send</button>
                                </div>
                                <div id="form-enviar" style="display: none;">
                                        <div id="res"></div>
                                        <h3>Deseas Continuar o Editar</h3>
                                        <button id="regresarFormulario" class="btn btn-primary text-uppercase"><i class="fa-solid fa-rotate-left"></i> Editar</button>
                                        <button  type="submit" class="btn btn-success text-uppercase"><i class="fa-solid fa-paper-plane"></i> Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include './assets/footer.php'; ?>
        <script src="js/Formulario.js" type="module"></script>
    </body>
</html>