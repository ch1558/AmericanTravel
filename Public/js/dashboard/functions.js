function eliminar(codigo,tipo){  
    document.getElementById("confirmar").value = codigo;
    document.getElementById("tipo").value = tipo;
    $('#confirmacion').modal('show');
}

function eliminarE(codigo){  
    document.getElementById("empleado").value = codigo;
    $('#confirmacionE').modal('show');
}

function editarMarca(codigo,nombre,descripcion){
    $('#añadirMarca').modal('show');
    document.getElementById("marcaCodigo").value = codigo;
    document.getElementById("marcaNombre").value = nombre;
    document.getElementById("marcaDescripcion").value = descripcion;
    document.getElementById("marcaEditar").value = 1;
}

function editarCategoria(codigo,nombre,descripcion){
    $('#añadirCategorias').modal('show');
    document.getElementById("categoriaCodigo").value = codigo;
    document.getElementById("categoriaNombre").value = nombre;
    document.getElementById("categoriaDescripcion").value = descripcion;
    document.getElementById("categoriaEditar").value = 1;
}

function editarProducto(codigo,nombre,compra,venta,marca,categoria){
    $('#añadirProducto').modal('show');
    document.getElementById("productoCodigo").value = codigo;
    document.getElementById("productoNombre").value = nombre;
    document.getElementById("productoPCompra").value = compra;
    document.getElementById("productoPVenta").value = venta;
    document.getElementById("productoMarca").value = marca;
    document.getElementById("productoCategoria").value = categoria;
    document.getElementById("productoEditar").value = 1;
}

function editarEmpleado(codigo,nombre,apellido,correo,telefono,puesto){
    $('#editar').modal('show');
    document.getElementById("empleadoCodigoE").value = codigo;
    document.getElementById("personaNombreE").value = nombre;
    document.getElementById("personaApellidoE").value = apellido;
    document.getElementById("correoPersonaE").value = correo;
    document.getElementById("personaTelefonoE").value = telefono;
    document.getElementById("personaPuestoE").value = puesto;
}

function editarVitrina(codigo,nombre,direccion,url,responsable){
    $('#añadirModal').modal('show');
    document.getElementById("vitrinaCodigo").value = codigo;
    document.getElementById("vitrinaNombre").value = nombre;
    document.getElementById("personaResponsable").value = responsable;
    document.getElementById("vitrinaDireccion").value = direccion;
    document.getElementById("vitrinaURL").value = url;
    document.getElementById("vitrinaEditar").value = 1;
}

function verDetalle(d){
    $('#detalle').modal('show');
    document.getElementById("parrafoDescriptivo").innerHTML = d;
}