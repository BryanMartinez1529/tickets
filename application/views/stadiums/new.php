<br>
<br>
<br>
<h1>Enter the stadium details</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Formulario</h6>
                            <form method="post" action="<?php echo site_url("/stadiums/guardar"); ?>" id="frm_new_stadium">
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text"  name="name_est" class="form-control" placeholder="Ingrese nombre de estadio" id="name_est" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Direction</label>
                                    <input type="text" name="direction_est" placeholder="Ingrese la direccion" class="form-control" id="direction_est" required>
                                </div>
                                <div class="col-md-4">
                                        <label for="" class="form-label">Capacity</label>
                                        <input type="number" name="capacity_est" class="form-control" placeholder="Ingrese la capacidad" id="capacity_est" required>
                                    </div>
                              </div>
                              <div class="row">

                                    <div class="col-md-4">
                                        <label for="" class="form-label">Locatiom</label>
                                        <input type="text" name="location_est" class="form-control" placeholder="Ingrese la localidad" id="location_est" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Doors Enter</label>
                                        <input type="number" name="doors_ingreso_est" class="form-control" placeholder="Ingrese el numero de puerta de acceso" id="doors_ingreso_est" required>
                                    </div>

                              </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>

                            </form>
                        </div>
 </div>



<script type="text/javascript">
    $("#frm_new_stadium").validate({
        rules:{
            name_est:{
                required:true,
                minlength:2,
                maxlength:50
            },
            direction_est:{
                required:true,
                minlength:3,
                maxlength:50
            },
            capacity_est:{
                required:true,
                minlength:1,
                maxlength:10,
                digits:true
            },
            location_est:{
                required:true,
                minlength:2,
                maxlength:50
            },
            doors_ingreso_est:{
              required:true,
              minlength:1,
              maxlength:10,
              digits:true
            }

        },
        messages:{
            name_est:{
                required:"Ingrese el nombre por favor",
                minlength:"El nombre debe tener  al menos 2 letras",
                maxlength:"Maximo posible"
            },
            direction_est:{
                required:"Ingrese la direccion por favor",
                minlength:"La direccion debe tener  al menos 3 letras",
                maxlength:"Maximo posible"
            },
            capacity_est:{
                required:"Ingrese la cantidad  por favor",
                minlength:"La cantidad   debe tener  al menos 1 digito",
                maxlength:"Maximo posible"
            },
            location_est:{
                required:"Ingrese la localidad por favor",
                minlength:"La localidad debe tener  al menos 3 letras",
                maxlength:"Maximo posible"
            },
            doors_ingreso_est:{
              required:"Ingrese la acceso  por favor",
              minlength:"El acceso debe tener al menos 1 numero",
              maxlength:"Maximo posible"
            }

        }

    });

</script>
