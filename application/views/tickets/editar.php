<br>
<br>
<br>
<h1>Editar los datos de los ticket ingresados</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Formulario</h6>
                            <form method="post" action="<?php echo site_url("/tickets/procesoActualizar"); ?>" id="frm_editar_tickets">
                              <input type="hidden" name="id_ticket" id="id_ticket" value="<?php echo $editarTicket->id_ticket ?>" >
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Valor</label>
                                    <input type="text"  name="valor_ticket" class="form-control"  id="valor_ticket" value="<?php echo $editarTicket->valor_ticket ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Hora</label>
                                    <input type="text" name="hora_ticket" class="form-control" id="hora_ticket" value="<?php echo $editarTicket->hora_ticket ?>">
                                </div>
                                <div class="col-md-4">
                                        <label for="" class="form-label">Fecha</label>
                                        <input type="number" name="fecha_ticket" class="form-control"  id="fecha_ticket" value="<?php echo $editarTicket->fecha_ticket ?>">
                                    </div>
                              </div>
                              <div class="row">

                                    <div class="col-md-4">
                                        <label for="" class="form-label">Asiento</label>
                                        <input type="text" name="asiento_ticket" class="form-control"  id="asiento_ticket" value="<?php echo $editarTicket->asiento_ticket ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Puerta de ingreso</label>
                                        <input type="text" name="puerta_ingreso" class="form-control"  id="puerta_ingreso" value="<?php echo $editarTicket->puerta_ingreso ?>">
                                    </div>

                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Nombre del Equipo</label>
                                        <input type="text" name="nombre_equipo" class="form-control" placeholder="Ingrese el Nombre del Equipo" id="nombre_equipo" value="<?php echo $editarTicket->nombre_equipo ?>" required>
                                    </div>
                                    <div class="6">
                                    <label for="" class="form-label">Nombre del Estadio</label>
                                        <input type="text" name="nombre_estadio" class="form-control" placeholder="Ingrese el Nombre del Estadio" id="nombre_estadio" value="<?php echo $editarTicket->nombre_estadio ?>" required>
                                    </div>
                              </div>

                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>

                            </form>
                        </div>
 </div>

 <script type="text/javascript">
    $("#frm_editar_ticket").validate({
      rules:{
          valor_ticket:{
              required:true,
              minlength:2,
              maxlength:50
          },
          hora_ticket:{
              required:true,
              minlength:3,
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
              required:"Ingrese el valor por favor",
              minlength:"El nombre debe tener  al menos 2 letras",
              maxlength:"Maximo posible"
          },
          hora_ticket:{
              required:"Ingrese la hora por favor",
              minlength:"La direccion debe tener  al menos 3 letras",
              maxlength:"Maximo posible"
          },
          fecha_ticket:{
              required:"Ingrese la fecha por favor",
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
