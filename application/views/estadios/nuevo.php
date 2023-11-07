<br>
<br>
<br>
<h1>Ingrese los datos del Estadio</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Formulario</h6>
                            <form method="post" action="<?php echo site_url("/estadios/guardar"); ?>" id="frm_nuevo_estadio">
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text"  name="nombre_est" class="form-control" placeholder="Ingrese nombre de estadio" id="nombre_est" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Direccion</label>
                                    <input type="text" name="direccion_est" placeholder="Ingrese la direccion" class="form-control" id="direccion_est" required>
                                </div>
                                <div class="col-md-4">
                                        <label for="" class="form-label">Capacidad</label>
                                        <input type="number" name="capacidad_est" class="form-control" placeholder="Ingrese la capacidad" id="capacidad_est" required>
                                    </div>
                              </div>
                              <div class="row">

                                    <div class="col-md-4">
                                        <label for="" class="form-label">Localidad</label>
                                        <input type="text" name="localidad_est" class="form-control" placeholder="Ingrese la localidad" id="localidad_est" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Puerta de ingreso</label>
                                        <input type="number" name="puertas_ingreso_est" class="form-control" placeholder="Ingrese el numero de puerta de acceso" id="puertas_ingreso_est" required>
                                    </div>

                              </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>

                            </form>
                        </div>
 </div>



<script type="text/javascript">
    $("#frm_nuevo_estadio").validate({
        rules:{
            nombre_est:{
                required:true,
                minlength:2,
                maxlength:50
            },
            direccion_est:{
                required:true,
                minlength:3,
                maxlength:50
            },
            capacidad_est:{
                required:true,
                minlength:1,
                maxlength:10,
                digits:true
            },
            localidad_est:{
                required:true,
                minlength:2,
                maxlength:50
            },
            puertas_ingreso_est:{
              required:true,
              minlength:1,
              maxlength:10,
              digits:true
            }

        },
        messages:{
            nombre_est:{
                required:"Ingrese el nombre por favor",
                minlength:"El nombre debe tener  al menos 2 letras",
                maxlength:"Maximo posible"
            },
            direccion_est:{
                required:"Ingrese la direccion por favor",
                minlength:"La direccion debe tener  al menos 3 letras",
                maxlength:"Maximo posible"
            },
            capacidad_est:{
                required:"Ingrese la cantidad  por favor",
                minlength:"La cantidad   debe tener  al menos 1 digito",
                maxlength:"Maximo posible"
            },
            localidad_est:{
                required:"Ingrese la localidad por favor",
                minlength:"La localidad debe tener  al menos 3 letras",
                maxlength:"Maximo posible"
            },
            puertas_ingreso_est:{
              required:"Ingrese la acceso  por favor",
              minlength:"El acceso debe tener al menos 1 numero",
              maxlength:"Maximo posible"
            }

        }

    });

</script>
