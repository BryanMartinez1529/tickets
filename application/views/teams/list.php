<br>
<br>
<br>
<h1>List of registered equipment</h1>
<?php if ($teams): ?>
    <table class="table table-striped table-bordered table-hover" id="tbl_teams">
     <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>TEMPLATE</th>
          <th>ACCIONES</th>

        </tr>
     </thead>
     <tbody>
       <?php foreach ($teams as $filaTemporal ): ?>
         <tr>

             <td class="text-center"> <?php echo $filaTemporal->id_equi ?></td>
             <td> <?php echo $filaTemporal->name_equi ?></td>
             <td> <?php echo $filaTemporal->template_equi ?></td>

             <td class="text-center">
               <a href="<?php echo site_url(); ?>/teams/edit/<?php echo $filaTemporal->id_equi; ?>" title="Editar equipo" >
                 <i class="mdi  mdi-pencil">Editar</i>
               </a>
              &nbsp;&nbsp;

                <a href="<?php echo site_url(); ?>/teams/eliminar/<?php echo $filaTemporal->id_equi; ?>" title="Borrar equipo" style="color:red" onclick="return confirm('Esta seguro de borra el registro?');">
                  <i class="mdi  mdi-close">Eliminar</i>
                </a>
             </td>

         </tr>

       <?php endforeach; ?>
     </tbody>
   </table>
<?php else: ?>
  <h1>No hay datos</h1>
<?php endif; ?>

<script type="text/javascript">
    $("#tbl_teams")
    .DataTable();
</script>
