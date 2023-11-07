<br>
<br>
<br>
<h1>Ingrese los datos del tickets</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form method="post" action="<?php echo site_url("/tickets/guardar"); ?>" id="frm_nuevo_ticket">
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Valor</label>
                                    <input type="text"  name="valor_ticket" class="form-control" placeholder="Ingrese el valor del ticket" id="valor_ticket" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Hora</label>
                                    <input type="text" name="hora_ticket" placeholder="Ingrese la hora del ticket" class="form-control" id="hora_ticket" required>
                                </div>
                                <div class="col-md-4">
                                        <label for="" class="form-label">Fecha</label>
                                        <input type="number" name="fecha_ticket" class="form-control" placeholder="Ingrese la fecha" id="fecha_ticket" required>
                                    </div>
                              </div>
                              <div class="row">

                                    <div class="col-md-4">
                                        <label for="" class="form-label">Asiento</label>
                                        <input type="text" name="asiento_ticket" class="form-control" placeholder="Ingrese el asiento" id="asiento_ticket" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Puerta de ingreso</label>
                                        <input type="number" name="puerta_ingreso" class="form-control" placeholder="numero de puerta de acceso" id="puerta_ingreso" required>
                                    </div>

                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Nombre Equipo</label>
                                        <input type="text" name="nombre_equipo" class="form-control" placeholder="Ingrese el Nombre del Equipo" id="nombre_equipo" required>
                                    </div>
                                    <div class="6">
                                    <label for="" class="form-label">Nombre Estadio</label>
                                        <input type="text" name="nombre_estadio" class="form-control" placeholder="Ingrese el Nombre del Estadio" id="nombre_estadio" required>
                                    </div>
                              </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>

                            </form>
                        </div>
 </div>



<script type="text/javascript">
    $("#frm_nuevo_ticket").validate({
        rules:{
            valor_ticket:{
                required:true,
                minlength:2,
                maxlength:50
            },
            hora_ticket:{
                required:true,
                minlength:2,
                maxlength:50
            },
            fecha_ticket:{
                required:true,
                minlength:1,
                maxlength:10,
                digits:true
            },
            asiento_ticket:{
                required:true,
                minlength:2,
                maxlength:50
            },
            puerta_ingreso:{
              required:true,
              minlength:1,
              maxlength:10,
              digits:true
            }

        },
        messages:{
            valor_ticket:{
                required:"Ingrese el valor del ticket por favor",
                minlength:"El nombre debe tener  al menos 2 letras",
                maxlength:"Maximo posible"
            },
            hora_ticket:{
                required:"Ingrese la hora por favor",
                minlength:"La direccion debe tener  al menos 3 letras",
                maxlength:"Maximo posible"
            },
            fecha_ticket:{
                required:"Ingrese la fecha  por favor",
                minlength:"La cantidad   debe tener  al menos 1 digito",
                maxlength:"Maximo posible"
            },
            asiento_ticket:{
                required:"Ingrese el asiento por favor",
                minlength:"La localidad debe tener  al menos 3 letras",
                maxlength:"Maximo posible"
            },
            puerta_ingreso:{
              required:"Ingrese la puerta acceso  por favor",
              minlength:"El acceso debe tener al menos 1 numero",
              maxlength:"Maximo posible"
            }

        }

    });

</script>
