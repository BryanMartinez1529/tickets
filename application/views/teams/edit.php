<br>
<br>
<br>
<h1>Edit Team data</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Formulario</h6>
                            <form method="post" action="<?php echo site_url("/teams/procesoActualizar"); ?>" id="frm_edit_team">
                              <input type="hidden" name="id_equi" id="id_equi" value="<?php echo $editTeam->id_equi ?>" >
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text"  name="name_equi " class="form-control"  id="name_equi " value="<?php echo $editTeam->name_equi  ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Template</label>
                                    <input type="text" name="template_equi" class="form-control" id="template_equi" value="<?php echo $editTeam->template_equi ?>">
                                </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>

                            </form>
                        </div>
 </div>

 <script type="text/javascript">
     $("#frm_new_team").validate({
         rules:{
             name_equi:{
                 required:true,
                 minlength:2,
                 maxlength:50
             },
             template_equi:{
                 required:true,
                 minlength:3,
                 maxlength:50
             }
         },
         messages:{
             name_equi:{
                 required:"Please enter name",
                 minlength:"The name must be at least 10 letters",
                 maxlength:"Maximum possible"
             },
             template_equi:{
                 required:"Please enter the template",
                 minlength:"The template must be at least 50 letters",
                 maxlength:"Maximum possible"
             }
         }

     });

 </script>
