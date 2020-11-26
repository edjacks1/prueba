
function crear(){
    establecerPeticion( document.getElementById("form_agregar") );
}

function actualizar(){
    let form       = document.getElementById("form_editar");
    let url        = form.action.split("/"); //explosiono el string
    let empleadoId = $(`#form_editar input[name="id"]`).val(); //Obtengo el valor del ID del usuario

    url[url.length - 1] = empleadoId;//Asigno la id del empleado para completar la ruta
    form.action         = url.join("/"); //Asigno la nueva url al action del formulario

    establecerPeticion( form );
}


function llenarFormulario(modalID, formID, empleado, editar = false){
    console.log(formID)
    //Convierto el json a objeto
    empleado = JSON.parse(empleado);
    //LLeno los campos del formulario
    $(`#${formID} input[name="id"]              `).val( empleado.id               ).attr('readonly', editar);
    $(`#${formID} input[name="nombre"]          `).val( empleado.nombre           ).attr('readonly', editar);
    $(`#${formID} input[name="apellido_paterno"]`).val( empleado.apellido_paterno ).attr('readonly', editar);
    $(`#${formID} input[name="apellido_materno"]`).val( empleado.apellido_materno ).attr('readonly', editar);
    $(`#${formID} input[name="email"]           `).val( empleado.email            ).attr('readonly', editar);
    $(`#${formID} textArea[name="tipo_contrato"]`).val( empleado.tipo_contrato    ).attr('readonly', editar);

    $(`#${modalID}`).modal();
}

function establecerPeticion(form){
    if( form.checkValidity() ){
        form.submit();
    }else{
        alert('Debes que completar todos los campos')
    } 
}
