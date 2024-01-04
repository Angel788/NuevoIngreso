export {validadorFormularioRegistro,validorFormularioBusqueda,validorLogin};

function validarDeBoletas(str){
    let pattern=/^(PM|PE)[0-9]{8}$/;
    return str.length>0 && pattern.test(str);
}
function validarCurp(str){
    let pattern=/^[A-Z]{4}[0-9]{6}[A-Z]{6}[A-Z|0-9]{2}$/;
    return str.length>0 && pattern.test(str);
}
function validarNumero(str){
    let pattern=/^[0-9]{2}[0-9]{8}$/;
    return str.length>0 && pattern.test(str);
}
function validarNombre(nombre){
    return nombre.length>0;
}
function validarApellido(apellido){
    return apellido.length>0;
}
function validarCorreo(correo){
    let pattern=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
    return correo.length>0 && pattern.test(correo);
}
function validarEscuela(escuela){
    return escuela.length>0;
}
function validarPromedio(promedio){
    return promedio.length>0 && isNaN(promedio)==0;
}
function validadorFormularioRegistro(formulario){
    let res="";
    if(validarNombre(formulario['nombre'].value)==0)res=res+"Nombre ";
    if(validarApellido(formulario['apellido'].value)==0)res=res+"Apellido ";
    if(validarDeBoletas(formulario['boleta'].value)==0)res=res+"Boleta ";
    if(validarCurp(formulario['curp'].value)==0)res=res+"Curp ";
    if(validarCorreo(formulario['correo'].value)==0)res=res+"Correo ";
    if(validarNumero(formulario['numero'].value)==0)res=res+"Numero ";
    if(validarEscuela(formulario['escuela'].value)==0 || (formulario['otraEscuela'].checked && validarEscuela(formulario['escuela2'].value)==0))res=res+"Escuela ";
    if(validarPromedio(formulario['promedio'].value)==0)res=res+"Promedio ";
    if(res.length>0) res=res+"Incorrecto";
    return res;
}
function validorFormularioBusqueda(formulario){
    let res="";
    if(validarCurp(formulario['curp'].value))res="Curp Invalido";
    return res;
}
function validorLogin(formulario){
    let res="";
    if(validarCorreo(formulario['correo'])) res=res+"Correo ";
    if(validarNombre(formulario['contrasena'])) res=res+"Contraseña ";
    if(res.length>0)res+=res+"Incorrectos";
    return res
}

