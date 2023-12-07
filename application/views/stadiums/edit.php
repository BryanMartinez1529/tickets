<br>
<br>
<br>
<h1>Edit Stadium data</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Formulario</h6>
                            <form method="post" action="<?php echo site_url("/stadiums/procesoActualizar"); ?>" id="frm_edit_stadium">
                              <input type="hidden" name="id_est" id="id_est" value="<?php echo $editStadium->id_est ?>" >
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Name/label>
                                    <input type="text"  name="name_est " class="form-control"  id="name_est " value="<?php echo $editStadium->name_est  ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Direction</label>
                                    <input type="text" name="direction_est" class="form-control" id="direction_est" value="<?php echo $editStadium->direction_est ?>">
                                </div>
                                <div class="col-md-4">
                                        <label for="" class="form-label">Capacity</label>
                                        <input type="number" name="capacity_est" class="form-control"  id="capacity_est" value="<?php echo $editStadium->capacity_est ?>">
                                    </div>
                              </div>
                              <div class="row">

                                    <div class="col-md-4">
                                        <label for="" class="form-label">lOCATION</label>
                                        <input type="text" name="location_est" class="form-control"  id="location_est" value="<?php echo $editStadium->location_est ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">DOORS ENTER</label>
                                        <input type="text" name="doors_ingreso_est" class="form-control"  id="doors_ingreso_est" value="<?php echo $editStadium->doors_ingreso_est ?>">
                                    </div>

                              </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>

                            </form>
                        </div>
 </div>

 <script type="text/javascript">
     $("#frm_edit_stadium").validate({
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
