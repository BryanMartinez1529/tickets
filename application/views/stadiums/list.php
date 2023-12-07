<br>
<br>
<br>
<h1>List of registered stadiums</h1>
<?php if ($stadiums): ?>
    <table class="table table-striped table-bordered table-hover" id="tbl_stadiums">
     <thead>
        <tr>
          <th>ID</th>
          <th>NAME STADIUM</th>
          <th>DIRECTION STADIUM</th>
          <th>CAPACITY</th>
          <th>lOCATION </th>
          <th>DOORS STADIUM</th>
          <th>ACCIONES</th>

        </tr>
     </thead>
     <tbody>
       <?php foreach ($stadiums as $filaTemporal ): ?>
         <tr>

             <td class="text-center"> <?php echo $filaTemporal->id_est ?></td>
             <td> <?php echo $filaTemporal->name_est  ?></td>
             <td> <?php echo $filaTemporal->direction_est ?></td>
             <td> <?php echo $filaTemporal->capacity_est?></td>
             <td> <?php echo $filaTemporal->location_est ?></td>
             <td> <?php echo $filaTemporal->doors_ingreso_est?></td>

             <td class="text-center">
               <a href="<?php echo site_url(); ?>/stadiums/edit/<?php echo $filaTemporal->id_est; ?>" title="Editar estadios" >
                 <i class="mdi  mdi-pencil">Editar</i>
               </a>
              &nbsp;&nbsp;

                <a href="<?php echo site_url(); ?>/stadiums/eliminar/<?php echo $filaTemporal->id_est; ?>" title="Borrar estadios" style="color:red" onclick="return confirm('Esta seguro de borra el registro?');">
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
    $("#tbl_stadiums")
    .DataTable();
</script>
