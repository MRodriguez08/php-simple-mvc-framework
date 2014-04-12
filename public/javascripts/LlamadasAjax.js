/*________________________ USUARIOS ________________________*/

function registroUsuario(cedula, email, pwd1, pwd2, nombres, apellidos, notificar, rol, organizacion) {
    /*
     $nick;
     $email;  
     $contrasenia1;
     $contrasenia2;
     $rol;
     $nombres;              
     $apellidos;
     */
    $.ajax({
        url: urlWebServices.urlUsuarioServices + "/registrarUsuario",
        type: 'POST',
        data: JSON.stringify({
            'cedula': cedula,
            'email': email,
            'contrasenia1': pwd1,
            'contrasenia2': pwd2,
            'nombres': nombres,
            'apellidos': apellidos,
            'notificar': notificar,
            'organizacion': organizacion,
            'rol': rol
        }),
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        $("#myModal").modal("hide");
    }).fail(function(msg) {

    })
}

function obtenerUsuarios() {
    $.ajax({
        url: urlWebServices.urlUsuarioServices + "/obtenerTodosUsuarios",
        type: 'GET',
        contentType: "application/json"
    }).done(function(data) {
        panelfiltrarUsuarios(JSON.parse(data));
    }).fail(function(msg) {
        alertify.error("Error al modificar organizacion");
    })
}

function modificarUsuario(cedula, nombre, apellido, mail, password1, password2) {

    $.ajax({
        url: urlWebServices.urlUsuarioServices + "/modificarUsuario",
        type: 'POST',
        data: JSON.stringify({
            'cedula': cedula,
            'nombre': nombre,
            'apellido': apellido,
            'email': mail,
            'pass1': password1,
            'pass2': password2
        }),
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        location.href = "index.php";

    }).fail(function(msg) {
        console.log(msg);
        alertify.error("Error al modificar organizacion");
    })

}

function eliminarUsuarioAjax(cedula) {
    $.ajax({
        url: urlWebServices.urlUsuarioServices + "/eliminarUsuario",
        type: 'POST',
        data: JSON.stringify({
            'cedula': cedula
        }),
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        loadPageUsuario();
    }).fail(function(msg) {
        console.log(msg);
        alertify.error("Error al modificar organizacion");
    })

}

function obtenerDatosDeUsuarioLogueado() {
    $.ajax({
        url: urlWebServices.urlUsuarioServices + "/obtenerDatosDeUsuarioLogueado",
        type: 'GET',
        contentType: "application/json"
    }).done(function(data) {
        generateViewUserDetails(JSON.parse(data));
    });
}

/*________________________ PARAMETROS ________________________*/


function obtenerTodosParametros() {
    $.ajax({
        url: urlWebServices.urlParametrosServices + "/obtenerTodosParametros",
        type: 'GET',
        datatype: "json",
        contentType: "application/json",
    })
    .done(function(msg) {
        msg = JSON.parse(msg);
        makeTablaParametros(msg);
    })
    .fail(function(msg) {
        console.log(msg);
        loadTablaParametros(new Array);
    })
}

function modificarParametro(nombreParametro, nuevoValorParametro) {
    /*
     - nombre
     - valor
     */
    $.ajax({
        url: urlWebServices.urlParametrosServices + "/modificarParametro",
        type: 'POST',
        data: JSON.stringify({
            'nombre': nombreParametro,
            'valor': nuevoValorParametro,
        }),
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        parametros_processSuccess(constantes.OPERACION_EDITAR, msg);
    }).fail(function(msg) {
        alertify.error("Error al modificar par&aacute;metro");
    })
}

function eliminarParametroAjax(nombreParametro) {
    $.ajax({
        url: urlWebServices.urlParametrosServices + "/eliminarParametro",
        type: 'POST',
        data: JSON.stringify({
            'nombre': nombreParametro
        }),
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        loadPageParametros();
    }).fail(function(msg) {

    })
}

function crearParametroAjax(nombre, valor, tipo, descripcion) {
    $.ajax({
        url: urlWebServices.urlParametrosServices + "/crearParametro",
        type: 'POST',
        data: JSON.stringify({
            'nombre': nombre,
            'valor': valor,
            'tipo': tipo,
            'descripcion': descripcion
        }),
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        loadPageParametros();
    }).fail(function(msg) {

    })
}

/*________________________ EMPRESAS ________________________*/

function obtenerTodasEmpresas() {
    return $.ajax({
        url: urlWebServices.urlEmpresaServices + "/obtenerTodasEmpresas",
        type: 'GET',
        contentType: "application/json",
    }).done(function(msg) {
        caVars.listaEmpresas = JSON.parse(msg);
    }).fail(function(msg) {
        alertify.error("Error al obtener empresas");
        makeTablaEmpresas(new Array);
    })
}

function registroEmpresa(rut, razonSocial, tipoContribuyente, rubros) {
    /*
     - $tipoContribuyente
     - $rut
     - $razonSocial
     */
    $.ajax({
        url: urlWebServices.urlEmpresaServices + "/registrarEmpresa",
        type: 'POST',
        data: JSON.stringify({
            'tipoContribuyente': tipoContribuyente,
            'rut': rut,
            'razonSocial': razonSocial,
            'rubros' : rubros
        }),
        datatype: "json",
        contentType: "application/json",
    })
    .done(function(msg) {
        empresa_processSuccess(constantes.OPERACION_INGRESAR, msg);
    })
    .fail(function(msg) {
        console.log(msg);
        alertify.error("Error al registrar empresa");
    })
}

function modificarEmpresa(rut, razonSocial, tipoContribuyente, listaRubrosNuevos, listaRubrosEliminados) {
    $.ajax({
        url: urlWebServices.urlEmpresaServices + "/modificarEmpresa",
        type: 'POST',
        data: JSON.stringify({
            'tipoContribuyente': tipoContribuyente,
            'rut': rut,
            'razonSocial': razonSocial,
            'listaRubrosNuevos' : listaRubrosNuevos,
            'listaRubrosEliminados' : listaRubrosEliminados
        }),
        datatype: "json",
        contentType: "application/json",
    })
    .done(function(msg) {
        empresa_processSuccess(constantes.OPERACION_EDITAR, msg);
    })
    .fail(function(msg) {
        alertify.error("Error al modificar empresa");
    })
}

function eliminarEmpresaAdministrada(rut) {
    $.ajax({
        url: urlWebServices.urlEmpresaServices + "/eliminarEmpresaAdministrada",
        type: 'POST',
        data: JSON.stringify({ 'rut': rut }),
        datatype: "json",
        contentType: "application/json",
    })
    .done(function(msg) {
        empresa_processSuccess(constantes.OPERACION_ELIMINAR, msg);
    })
    .fail(function(msg) {
        alertify.error("Error al modificar empresa");
    })
}

function registroRubroBps(rut, nroBps, rubro, descripcion) {
    $.ajax({
        url: urlWebServices.urlEmpresaServices + "/registrarRubroBps",
        type: 'POST',
        data: JSON.stringify({
            'rut': rut,
            'nroBps': nroBps,
            'rubro': rubro,
            'descripcion': descripcion
        }),
        datatype: "json",
        contentType: "application/json",
    })
    .done(function(msg) {
        empresa_rubro_processSuccess(constantes.OPERACION_INGRESAR, msg);
    })
    .fail(function(msg) {
        console.log(msg);
        alertify.error("Error al registrar rubro");
    })
}


/*________________________ ORGANIZACIONES ________________________*/


function modificarOrganizacion(rut_p, razonSocial_p) {

    $.ajax({
        url: urlWebServices.urlOrganizacionServices + "/modificarOrganizacion",
        type: 'POST',
        data: JSON.stringify({
            'rutOrg': rut_p,
            'razonSocial': razonSocial_p
        }),
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        mostrarMensajeRespuesta(msg);
        loadPageOrganizacion();
    }).fail(function(msg) {
        console.log(msg);
        alertify.error("Error al modificar organizacion");
    })
}

function obtenerOrganizaciones() {
    $.ajax({
        url: urlWebServices.urlOrganizacionServices + "/getAllOrg",
        type: 'GET',
        contentType: "application/json"
    }).done(function(data) {
        panelfiltrarOrganizaciones(JSON.parse(data));
    })
}

function obtenerUsuariosOrganizacion() {
    $.ajax({
        url: urlWebServices.urlOrganizacionServices + "/getUsuarios&rut_org=" + organizacion,
        type: 'GET',
        contentType: "application/json"
    }).done(function(data) {
        panelfiltrarUsuarios(JSON.parse(data));
    }).fail(function(msg) {
//console.log(msg);
        alertify.error("Error al modificar organizacion");
    })
}

function obtenerParametrosOrganizacion() {
    $.ajax({
        url: urlWebServices.urlOrganizacionServices + "/getParametros&rut_org=" + organizacion,
        type: 'GET',
        contentType: "application/json"
    }).done(function(data) {
        panelfiltrarParametrosOrganizacion(JSON.parse(data));
    }).fail(function(msg) {

    })
}

function obtenerEmpresasOrganizacion() {

    $.ajax({
        url: urlWebServices.urlOrganizacionServices + "/getEmpresas&rut_org=" + organizacion,
        type: 'GET',
        contentType: "application/json"
    }).done(function(data) {
        panelfiltrarEmpresasOrganizacion(JSON.parse(data));
    }).fail(function(msg) {

    })
}

function eliminarParametroOrganizacionAjax(nombreParametro, objRutOrg) {
    $.ajax({
        url: urlWebServices.urlOrganizacionServices + "/eliminarParametro",
        type: 'POST',
        data: JSON.stringify({
            'nombre': nombreParametro,
            'rutOrg': organizacion,
        }),
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        mostrarMensajeRespuesta(msg);
        objRutOrg.remove();
    }).fail(function(msg) {

    })
}

function agregarEmpresasParametros(data) {

    $.ajax({
        url: urlWebServices.urlOrganizacionServices + "/agregarEmpresasParametros",
        type: 'POST',
        data: JSON.stringify({
            "data": data
        })
        ,
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        mostrarMensajeRespuesta(msg);
    }).fail(function(msg) {

    })

}

function crearNuevaOrganizacion(rutOrg, razonSocial) {
    $.ajax({
        url: urlWebServices.urlOrganizacionServices + "/crearOrganizacion",
        type: 'POST',
        data: JSON.stringify({
            "rutOrg": rutOrg,
            "razonSocial": razonSocial
        })
        ,
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        mostrarMensajeRespuesta(msg);
        loadPageOrganizacion();
    }).fail(function(msg) {

    })
}

function eliminarOrganizacion(event) {
    var padre = $(event.target).parent().parent();
    var rutOrg = padre.children()[0].innerHTML;

    $.ajax({
        url: urlWebServices.urlOrganizacionServices + "/eliminarOrganizacion",
        type: 'POST',
        data: JSON.stringify({
            "rutOrg": rutOrg
        })
        ,
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        mostrarMensajeRespuesta(msg);
        loadPageOrganizacion();
    }).fail(function(msg) {

    })
}
/*________________________ CERTIFICADOS ________________________*/


function obtenerTodosCertificados() {
    return $.ajax({
        url: urlWebServices.urlCertificadoServices + "/obtenerTodosCertificados",
        type: 'GET',
        contentType: "application/json"
    }).done(function(data) {
        caVars.listaCertificados = JSON.parse(data);
    }).fail(function(msg) {
        makeTablaCertificados(new Array);
        alertify.error("Error al obtener certificados");
        dfd.resolve("hurray");
    })
}

function obtenerTodosTiposCertificados() {
    $.ajax({
        url: urlWebServices.urlCertificadoServices + "/obtenerTodosTiposCertificado",
        type: 'GET',
        contentType: "application/json"
    }).done(function(data) {
        caVars.listaTiposCertificados = JSON.parse(data);
    }).fail(function(msg) {
        makeTablaCertificados(new Array);
        alertify.error("Error al obtener tipos de certificados");
    })
}

function nuevoCertificado(tipo, empresa, observaciones, nroCertificado) {

    $.ajax({
        url: urlWebServices.urlCertificadoServices + "/nuevoCertificado",
        type: 'POST',
        data: JSON.stringify({
            "idTipo": tipo,
            "empresa": empresa,
            "observaciones": observaciones,
            'nroCertificado': nroCertificado
        })
        ,
        datatype: "json",
        contentType: "application/json",
    }).done(function(msg) {
        certificado_processSuccess(constantes.OPERACION_INGRESAR, msg);
    }).fail(function(msg) {
        alertify.error("Error al ingresar nuevo certificado");
    })

}

/*________________________ RESUMEN ________________________*/

function obtenerValoresINE() {
    $.ajax({
        url: urlWebServices.urlIndexServices + "/getInfoINE",
        type: 'GET',
        contentType: "application/json"
    }).done(function(data) {
        loadInfoResumen(JSON.parse(data));
    }).fail(function(msg) {

    })
}