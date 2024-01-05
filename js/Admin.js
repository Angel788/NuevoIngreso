import { validarCurp} from "./modulos/Validadores.js";
import {convertiUrl,convertirFormularioToJson,convertirJSONtoHTMLAdmin,convertirJSONtoHTMLAdminHead} from "./modulos/ConvertirDatos.js";
let tabla=document.getElementById('admin-table');
let btns=document.getElementById('submitSearch');
let formBuscar=document.getElementById('buqueda');
let adminhead=document.getElementById("admin-head");

btns.addEventListener('click',(e)=>{
    e.preventDefault();
    if(formBuscar['curp'].value.length>0){
        let json=convertirFormularioToJson(formBuscar);
        let location=convertiUrl(window.location.pathname);
        let res={};
        $.post(location+"/server/recuperarAlumnoAdmin.php", json,
            function (data, textStatus) {
                res=JSON.parse(data);
                let head=convertirJSONtoHTMLAdminHead(res);
                let body=convertirJSONtoHTMLAdmin(res,res['curp']);
                adminhead.innerHTML=head;
                tabla.innerHTML=body;   
            }
        );
    }
})