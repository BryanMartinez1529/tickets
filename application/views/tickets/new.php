<br>
<br>
<br>
<h1>Enter ticket details</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Formulario</h6>
                            <form method="post" action="<?php echo site_url("/tickets/guardar"); ?>" id="frm_new_ticket">
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Worth</label>
                                    <input type="text"  name="worth_ticket" class="form-control" placeholder="Enter the ticket value" id="worth_ticket" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Time</label>
                                    <input type="text" name="time_ticket" placeholder="Enter the time of the ticket" class="form-control" id="time_ticket" required>
                                </div>
                                <div class="col-md-4">
                                        <label for="" class="form-label">Date</label>
                                        <input type="text"  name="date_ticket" class="form-control" placeholder="Enter the date" id="date_ticket" required>
                                    </div>
                              </div>
                              <div class="row">

                                    <div class="col-md-6">
                                        <label for="" class="form-label">Seat</label>
                                        <input type="text" name="seat_ticket" class="form-control" placeholder="Enter available seat" id="seat_ticket" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Door</label>
                                        <input type="number" name="door_ingreso" class="form-control" placeholder="Enter the access door number" id="door_ingreso" required>
                                    </div>

                              </div>
                              <div class="row">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Card</label>
                                        <input type="text" name="card_cli" class="form-control" placeholder="Enter the customer ID" id="card_cli" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Name of Team</label>
                                        <input type="text" name="name_equipo" class="form-control" placeholder="Enter Team Name" id="name_equipo" required>
                                    </div>
                                    <div class="col-md-4">
                                    <label for="" class="form-label">Name Stadium</label>
                                        <input type="text" name="name_estadio" class="form-control" placeholder="Enter Stadium Name" id="name_estadio" required>
                                    </div>

                              </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>

                            </form>
                        </div>
 </div>



<script type="text/javascript">
    $("#frm_new_ticket").validate({
        rules:{
            worth_ticket:{
                required:true,
                minlength:2,
                maxlength:50
            },
            time_ticket:{
                required:true,
                minlength:2,
                maxlength:50
            },
            date_ticket:{
                required:true,
                minlength:1,
                maxlength:10,
                digits:true
            },
            seat_ticket:{
                required:true,
                minlength:2,
                maxlength:50
            },
            door_ingreso:{
              required:true,
              minlength:1,
              maxlength:10,
              digits:true
            }

        },
        messages:{
            worth_ticket:{
                required:"Ingrese el valor del ticket por favor",
                minlength:"El nombre debe tener  al menos 2 letras",
                maxlength:"Maximo posible"
            },
            time_ticket:{
                required:"Ingrese la hora por favor",
                minlength:"La direccion debe tener  al menos 3 letras",
                maxlength:"Maximo posible"
            },
            date_ticket:{
                required:"Ingrese la fecha  por favor",
                minlength:"La cantidad   debe tener  al menos 1 digito",
                maxlength:"Maximo posible"
            },
            seat_ticket:{
                required:"Ingrese el asiento por favor",
                minlength:"La localidad debe tener  al menos 3 letras",
                maxlength:"Maximo posible"
            },
            door_ingreso:{
              required:"Ingrese la puerta acceso  por favor",
              minlength:"El acceso debe tener al menos 1 numero",
              maxlength:"Maximo posible"
            }

        }

    });

</script>
