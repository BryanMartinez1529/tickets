<br>
<br>
<br>
<h1>Enter customer details</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Form</h6>
                            <form method="post" action="<?php echo site_url("/customers/guardar"); ?>" id="frm_new_customer">
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Names</label>
                                    <input type="text"  name="name_cli" class="form-control" placeholder="enter your name" id="name_cli" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Last Names</label>
                                    <input type="text" name="lastname_cli" placeholder="enter your last name" class="form-control" id="lastname_cli" required>
                                </div>
                                <div class="col-md-4">
                                        <label for="" class="form-label">Card</label>
                                        <input type="number" name="card_cli" class="form-control" placeholder="enter your card id" id="card_cli" required>
                                    </div>
                              </div>
                              <div class="row">

                                    <div class="col-md-4">
                                        <label for="" class="form-label">Direcction</label>
                                        <input type="text" name="direction_cli" class="form-control" placeholder="enter your Direcction" id="direction_cli" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Mail</label>
                                        <input type="text" name="mail_cli" class="form-control" placeholder="enter your mail" id="mail_cli" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Phone</label>
                                        <input type="number"  name="phone_cli" class="form-control" placeholder="enter your Phone" id="phone_cli" required>
                                    </div>
                              </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Save</button>
                              </div>

                            </form>
                        </div>
 </div>



<script type="text/javascript">
    $("#frm_new_customer").validate({
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
                required:"Please enter name",
                minlength:"The name must be at least 2 letters",
                maxlength:"Maximum possible"
            },
            lastname_cli:{
                required:"Please enter last name",
                minlength:"Last name must be at least 3 letters",
                maxlength:"Maximum possible"
            },
            card_cli:{
                required:"Please enter your ID",
                minlength:"The ID must have at least 10 digits",
                maxlength:"Maximum possible"
            },
            direction_cli:{
                required:"Please enter the address",
                minlength:"The address must be at least 3 letters",
                maxlength:"Maximum possible"
            },
            mail_cli:{
                required:"Please enter email",
                minlength:"Please enter a valid email",
                maxlength:"Maximum possible"
            },
            phone_cli:{
                required:"Please enter phone number",
                minlength:"The phone number must have at least 10 digits",
                maxlength:"Maximum possible"
            }
        }

    });

</script>
