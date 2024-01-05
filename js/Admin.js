import { validarCurp} from "./modulos/Validadores.js";
import {convertiUrl,convertirFormularioToJson,convertirJSONtoHTMLAdmin,convertirJSONtoHTMLAdminHead} from "./modulos/ConvertirDatos.js";
let tabla=document.getElementById('admin-table');
let btns=document.getElementById('submitSearch');
let formBuscar=document.getElementById('buqueda');
let adminhead=document.getElementById("admin-head");
let del=document.getElementById("del");
var v=[];

btns.addEventListener('click',(e)=>{
    e.preventDefault();
    if(formBuscar['curp'].value.length>0){
        let json=convertirFormularioToJson(formBuscar);
        let location=convertiUrl(window.location.pathname);
        let res={};
        $.post(location+"/server/recuperarAlumnoAdmin.php", json,
            function (data, textStatus) {
                res=JSON.parse(data);
                convertirJSONtoHTMLAdmin(res,res['curp'],tabla); 
            }
        );
    }
});
formEditsFunctions();
function formEditsFunctions(){
    let form;
    let index=0;
    for(let i=0;i<21;i++){
        let id="form-edit-"+i;
        console.log(id);
        v.push(document.getElementById(id));
        v[i].addEventListener("submit",(e)=>{
            e.preventDefault();
            let campo=v[i]['ipt'].getAttribute('campo');
            let valor=$("#"+id+" > input").val();
            let curp=v[i]['ipt'].getAttribute('curp');
            let json={
                "campo":campo,
                "valor":valor,
                "curp":curp
            };
            console.log(json);
            let location=convertiUrl(window.location.pathname);
            $.post(location+"/server/actualizarAlumno.php", json,
                function (data, textStatus) {
                    alert(data);
                }
            );
        });
        index++;
    }
}
del.addEventListener("click",(e)=>{
    e.preventDefault();
    let curp=del.getAttribute('curp');
    let json={'curp':curp};
    let location=convertiUrl(window.location.pathname);
    $.post(location+"/server/eliminarAlumno.php", json,
        function (data, textStatus) {
            alert(data);
        }
    );
});