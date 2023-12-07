<br>
<br>
<br>
<h1>Edit Customer data</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Formulario</h6>
                            <form method="post" action="<?php echo site_url("/customers/procesoActualizar"); ?>" id="frm_edit_customer">
                              <input type="hidden" name="id_cli" id="id_cli" value="<?php echo $editCustomer->id_cli ?>" >
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Names</label>
                                    <input type="text"  name="name_cli" class="form-control"  id="name_cli" value="<?php echo $editCustomer->name_cli ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Last Names</label>
                                    <input type="text" name="lastname_cli" class="form-control" id="lastname_cli" value="<?php echo $editCustomer->lastname_cli ?>">
                                </div>
                                <div class="col-md-4">
                                        <label for="" class="form-label">CARD</label>
                                        <input type="number" name="card_cli " class="form-control"  id="card_cli " value="<?php echo $editCustomer->card_cli ?>">
                                    </div>
                              </div>
                              <div class="row">

                                    <div class="col-md-4">
                                        <label for="" class="form-label">Direcction</label>
                                        <input type="text" name="direction_cli" class="form-control"  id="direction_cli" value="<?php echo $editCustomer->direction_cli ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Mail</label>
                                        <input type="text" name="mail_cli" class="form-control"  id="mail_cli" value="<?php echo $editCustomer->mail_cli ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Phone</label>
                                        <input type="number"  name="phone_cli" class="form-control"  id="phone_cli" value="<?php echo $editCustomer->phone_cli ?>">
                                    </div>
                              </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>

                            </form>
                        </div>
 </div>

 <script type="text/javascript">
    $("#frm_edit_customer").validate({
        rules:{
            name_cli:{
                required:true,
                minlength:2,
                maxlength:50
            },
            lastname_cli:{
                required:true,
                minlength:3,
                maxlength:50
            },
            card_cli:{
                required:true,
                minlength:10,
                maxlength:10,
                digits:true
            },
            direction_cli:{
                required:true,
                minlength:2,
                maxlength:50
            },
            mail_cli:{
                required:true,
                minlength:5,
                maxlength:50
            },
            phone_cli:{
                required:true,
                minlength:10,
                maxlength:10
            }
        },
        messages:{
            name_cli:{
                required:"Ingrese el nombre por favor",
                minlength:"El nombre debe tener  al menos 2 letras",
                maxlength:"Maximo posible"
            },
            lastname_cli:{
                required:"Ingrese el apellido por favor",
                minlength:"El apellido  debe tener  al menos 3 letras",
                maxlength:"Maximo posible"
            },
            card_cli:{
                required:"Ingrese la cedula  por favor",
                minlength:"La cedula   debe tener  al menos 10 digitos",
                maxlength:"Maximo posible"
            },
            direction_cli:{
                required:"Ingrese la direccion por favor",
                minlength:"La direccion debe tener  al menos 3 letras",
                maxlength:"Maximo posible"
            },
            mail_cli:{
                required:"Ingrese el correo por favor",
                minlength:"Ingrese un correo válido por favor",
                maxlength:"Maximo posible"
            },
            phone_cli:{
                required:"Ingrese el número de teléfono por favor",
                minlength:"El número de teléfono debe tener mínimo 10 dígitos",
                maxlength:"Maximo posible"
            }
        }

    });

</script>
