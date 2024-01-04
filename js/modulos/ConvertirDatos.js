export {convertiUrl,convertirJSONtoHTML,converirFormularioToJSONForm,convertirFormularioToJson};
function converirFormularioToJSONForm(formulario){
    const fm=new FormData(formulario);
    let json={};
    fm.forEach((value,key)=>(json[key]=value));
    if(json['escuela2'].length>0)json['escuela']=json['escuela2'];
    delete json['escuela2'];
    return json;
}
function convertiUrl(url){
    let l=0;
    for(let i=url.length;i>=0;i--){
        l=i;
        if(url[i]=='/')break;
    }
    return url.substring(0, l);
}
function convertirJSONtoHTML(json){
    let res="";
    for(let obj in json){
        if(typeof json[obj]=="string" && json[obj].length>0){
            res+='<p class="font-weight-bold text-uppercase">'+obj+': '+(json[obj]=='on'?"Si":json[obj])+' </p>';
        }
    }
    return res;
}
function convertirFormularioToJson(formulario){
    const fm=new FormData(formulario);
    let json={};
    fm.forEach((value,key)=>(json[key]=value));
    return json;
}