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
                                    <input type="text" placeholder="Nombre" type="text" id="nombre" name="nombre"class="form-control" required>
                                    <label for="nombre">Nombre o Nombres</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Nombre requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="apellidopaterno" placeholder="Apellido" type="text" id="apellido" class="form-control" required>
                                    <label for="nombre">Apellido Paterno</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="apellidomaterno" placeholder="Apellido" type="text" id="apellido" class="form-control" required>
                                    <label for="nombre">Apellido Materno</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="boleta" placeholder="Preboleta" type="text" id="pm" class="form-control" required>
                                    <label for="nombre">Preboleta</label>
                                    <div class="invalid-feedback" data-sb-feedback="boleta">La boleta no es valida.</div>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="curp" placeholder="Apellido"  id="curp" class="form-control">
                                    <label for="nombre">Curp</label>
                                    <div class="invalid-feedback" data-sb-feedback="curp">El curp es invalido.</div>
                                </div>
                                <h5>Genero: </h5>
                                <div class="form-check form-check-inline">
                                    <input type="radio" value="masculino" checked name="genero" placeholder="genero"   class="form-check-input" required>
                                    <label for="genero" class="form-check-label">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" value="femenino" name="genero" placeholder="genero"   class="form-check-input" required>
                                    <label for="genero" class="form-check-label">Femenino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" value="otro" name="genero" placeholder="genero"   class="form-check-input" required>
                                    <label for="genero" class="form-check-label">Otro</label>
                                </div>
                                <div class="form-floating">
                                    <input type="date" name="nacimiento" placeholder="Apellido"  id="nac" class="form-control" required>
                                    <label for="nombre">Fecha De Nacimiento</label>
                                    <div class="invalid-feedback" data-sb-feedback="curp">El curp es invalido.</div>
                                </div>

                                </div>
                                <div class="block-form">
                                    <h3><i class="fa-solid fa-address-book"></i> Contacto</h3>
                                    <div class="form-floating">
                                        <input name="correo" placeholder="Email" type="email" id="coreo" class="form-control" required>
                                        <label for="nombre"><i class="fa-solid fa-envelope"></i> Email</label>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El correo es invalido.</div>
                                    </div>
                                    <div class="form-floating">
                                        <input  placeholder="Telefono" name="telefono" type="number" id="telefono" class="form-control" required>
                                        <label for="nombre"><i class="fa-solid fa-phone"></i> Telefono</label>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El telefono es invalido.</div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-floating">
                                                <select name="estado" id="estado" class="form-select obd">
                                                    <option value="Aguascalientes">Aguascalientes</option>
                                                    <option value="Baja California">Baja California</option>
                                                    <option value="Baja California Sur">Baja California Sur</option>
                                                    <option value="Campeche">Campeche</option>
                                                    <option value="Coahila">Coahuila</option>
                                                    <option value="Colima">Colima</option>
                                                    <option value="Chiapas">Chiapas</option>
                                                    <option value="Chihuahua">Chihuahua</option>
                                                    <option value="CDMX">Ciudad de Mexico</option>
                                                    <option value="Durango">Durango</option>
                                                    <option value="Guanajuato">Guanajuato</option>
                                                    <option value="Guerrero">Guerrero</option>
                                                    <option value="Hidalgo">Hidalgo</option>
                                                    <option value="Jalisco">Jalisco</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Michoacan">Michoan</option>
                                                    <option value="Morelos">Morelos</option>
                                                    <option value="Nayarit">Nayarit</option>
                                                    <option value="Nuevo Leon">Nuevo Leon</option>
                                                    <option value="Oxaca">Oaxaca</option>
                                                    <option value="Puebla">Puebla</option>
                                                    <option value="Queretaro">Queretaro</option>
                                                    <option value="Quintana Roo">Quintana Roo</option>
                                                    <option value="San Luis Potosi">San Luis Potosi</option>
                                                    <option value="Sinaloa">Sinaloa</option>
                                                    <option value="Sonora">Sonora</option>
                                                    <option value="Tabasco">Tabasco</option>
                                                    <option value="Tamaulipas">Tamalipas</option>
                                                    <option value="Tlaxcala">Tlaxcala</option>
                                                    <option value="Veracruz">Veracruz</option>
                                                    <option value="Yucatan">Yucatan</option>
                                                    <option value="Zacatecas">Zacatecas</option>
                                                </select>
                                                <label for="nombre">Estado</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="municipio" placeholder="Apellido" type="text" id="municipio" class="form-control" required>
                                                <label for="nombre">Municipio o Alcadia</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="calle" placeholder="Apellido" type="text" id="calle" class="form-control" required>
                                                <label for="nombre">Calle</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-floating">
                                                <input type="number" name="numerolote" placeholder="Apellido" type="text" id="numerolote" class="form-control" required>
                                                <label for="nombre">Numero</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-floating">
                                                <input type="number" name="codigopostal" placeholder="Apellido" type="text" id="codigopostal" class="form-control" required>
                                                <label for="nombre">CodigoPostal</label>
                                                <div class="invalid-feedback" data-sb-feedback="name:required">Apellido requerido.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-form">
                                    <h3><i class="fa-solid fa-globe"></i> Procedencia</h3>
                                    <div class="form-floating">
                                        <select name="escuela" id="escuela" class="form-select obd">
                                        <option value="Cet">CET Walter Cross Buchanan</option>
                                        <option value="Cecyt 1">Cecyt 1 Gonzalo Vazquez Vela</option>
                                        <option value="Cecyt 2">Cecyt 2 Miguel Bernal</option>
                                        <option value="Cecyt 3">Cecyt 3 Estanislao Ramirez Ruiz</option>
                                        <option value="Cecyt 4">Cecyt 4 Lazaro Cardenas del Rio</option>
                                        <option value="Cecyt 5">Cecyt 5 Benito Juarez Garcia</option>
                                        <option value="Cecyt 6">Cecyt 6 Miguel Othon de Mendizabal</option>
                                        <option value="Cecyt 7">Cecyt 7 Cuauhtémoc</option>
                                        <option value="Cecyt 8">Cecyt 8 Narciso Vassols</option>
                                        <option value="Cecyt 9">Cecyt 9 Juan de Dios Batiz</option>
                                        <option value="Cecyt 10">Cecyt 10 Carlos Vallejo Marquez</option>
                                        <option value="Cecyt 11">Cecyt 11 Wilfrido Massiu</option>
                                        <option value="Cecyt 12">Cecyt 12 Jose Maria Morelos y Pavon</option>
                                        <option value="Cecyt 13">Cecyt 13 Ricardo Flores Magon</option>
                                        <option value="Cecyt 14">Cecyt 14 Luis Enrique Herro</option>
                                        <option value="Cecyt 15">Cecyt 15 Diodoro Antonez</option>
                                        <option value="Cecyt 19">Cecyt 19 Leona Vicario</option>
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
                                        <input name="discapacidadmotriz" placeholder="Discapacidad" type="checkbox"  class="form-check obd" require>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El telefono es invalido.</div>
                                    </div>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Discapacidad Auditiva</label>
                                        <input name="discapacidadauditiva" placeholder="Discapacidad" type="checkbox"  class="form-check obd" require>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El telefono es invalido.</div>
                                    </div>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Discapacidad Visual</label>
                                        <input name="discapacidadvisual" placeholder="Discapacidad" type="checkbox"  class="form-check obd" require>
                                        <div class="invalid-feedback" data-sb-feedback="curp">El telefono es invalido.</div>
                                    </div>
                                    <div class="">
                                        <label for="otraDiscapacidadCheck">Otra Discapacidad</label>
                                        <input  placeholder="Discapacidad" type="checkbox" id="otraDiscapacidadCheck" class="form-check obd" require>
                                    </div>
                                    <div class="form-floating" id="otraDiscapacidadCampo" style="display: none;">
                                        <input type="text" name="otradiscapacidad" id="" class="obd form-control" value="">
                                        <label for="escuelas2"><i class="fa-solid fa-school"></i> Otra Escuela</label>
                                        <div class="invalid-feedback" data-sb-feedback="escuela">La escuela es invalida.</div>
                                    </div>
                                </div>
                                <div class="form-block">
                                    <h3>Promedio</h3>
                                    <div class="form-floating">
                                        <input name="promedio" placeholder="Promedio" type="number" step="0.01" id="promedio" class="form-control" require>
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