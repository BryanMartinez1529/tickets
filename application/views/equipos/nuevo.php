<br>
<br>
<br>
<h1>Ingrese los datos del Equipo</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form method="post" action="<?php echo site_url("/equipos/guardar"); ?>" id="frm_nuevo_equipo">
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text"  name="nombre_equi" class="form-control" placeholder="Ingrese su nombre" id="nombre_equi" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Plantilla</label>
                                    <input type="text" name="plantilla_equi" placeholder="Ingrese su plantilla" class="form-control" id="plantilla_equi" required>
                                </div>

                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>

                            </form>
                        </div>
 </div>



<script type="text/javascript">
    $("#frm_nuevo_equipo").validate({
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
                minlength:"La plantilla  debe tener  al menos 50 letras",
                maxlength:"Maximo posible"
            }
        }

    });

</script>
