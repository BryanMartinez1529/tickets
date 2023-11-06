<br>
<br>
<br>
<h1>Editar los datos del Equipo</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Formulario</h6>
                            <form method="post" action="<?php echo site_url("/equipos/procesoActualizar"); ?>" id="frm_editar_equipo">
                              <input type="hidden" name="id_equi" id="id_equi" value="<?php echo $editarEquipo->id_equi ?>" >
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text"  name="nombre_equi" class="form-control"  id="nombre_equi" value="<?php echo $editarEquipo->nombre_equi ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Plantilla</label>
                                    <input type="text" name="plantilla_equi" class="form-control" id="plantilla_equi" value="<?php echo $editarEquipo->plantilla_equi ?>">
                                </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>

                            </form>
                        </div>
 </div>

 <script type="text/javascript">
    $("#frm_editar_equipo").validate({
      rules:{
          nombre_equi:{
              required:true,
              minlength:2,
              maxlength:50
          },
          plantilla_equi:{
              required:true,
              minlength:3,
              maxlength:50
          }

      },
      messages:{
          nombre_equi:{
              required:"Ingrese el nombre por favor",
              minlength:"El nombre debe tener  al menos 10 letras",
              maxlength:"Maximo posible"
          },
          plantilla_equi:{
              required:"Ingrese la plantilla por favor",
              minlength:"La plantilla debe tener  al menos 50 letras",
              maxlength:"Maximo posible"
          }

      }

  });
</script>
