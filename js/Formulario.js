import { validadorFormularioRegistro} from "./modulos/Validadores.js";
import {convertiUrl,convertirJSONtoHTML,converirFormularioToJSONForm } from "./modulos/ConvertirDatos.js";

let formularioRegresar=document.getElementById("regresarFormulario");
let formularioRegistrar=document.getElementById("Formulario-Registro");
let formularioEnviar=document.getElementById("enviarFormulario");
let checkOtra=document.getElementById("otraEscuela");
let otraEscuela=document.getElementById("OtraEscuela");
let otraDiscapacidadCheck=document.getElementById("otraDiscapacidadCheck");
let otraDiscapacidadCampo=document.getElementById('otraDiscapacidadCampo');
let formData=document.getElementById('form-data');
let formEnviar=document.getElementById('form-enviar');
let resForm=document.getElementById('res');

checkOtra.checked=false;
otraDiscapacidadCheck.checked=false;

formularioEnviar.addEventListener('click',(evento)=>{
    evento.preventDefault();
    let res=validadorFormularioRegistro(formularioRegistrar);
    if(res.length>0){
        alert(res);
    }
    else{
        let json=converirFormularioToJSONForm(formularioRegistrar);
        console.log(json)
        let jsontoHTML=convertirJSONtoHTML(json);
        console.log(jsontoHTML);
        resForm.innerHTML=jsontoHTML;
        formData.style.display="none";
        formEnviar.style.display="block";
    }
});

formularioRegresar.addEventListener('click',(evento)=>{
    evento.preventDefault();
    formData.style.display="block";
    formEnviar.style.display="none";
});

formularioRegistrar.addEventListener('submit',(evento)=>{
    evento.preventDefault();
    let res=validadorFormularioRegistro(formularioRegistrar);
    if(res.length>0) alert(res);
    else{
        let json=converirFormularioToJSONForm(formularioRegistrar);
        console.log(json);
        let location=convertiUrl(window.location.pathname);
        $.post(location+"/server/respuestaIngreso.php", json,
            function (data, textStatus) {
                if(data!="ok"){alert(data);}
                else window.location.replace(location+"/index.php");   
            }
        ); 
    }
    otraEscuela.value="";
    otraDiscapacidadCampo.value="";
});

checkOtra.addEventListener('change',(e)=>{
    if(checkOtra.checked) otraEscuela.style.display="block";
    else otraEscuela.style.display="none";
    otraEscuela.value="";
});

otraDiscapacidadCheck.addEventListener('change',(e)=>{
    if(otraDiscapacidadCheck.checked)otraDiscapacidadCampo.style.display="block";
    else otraDiscapacidadCampo.style.display="none";
    otraDiscapacidadCampo.value="";
});
