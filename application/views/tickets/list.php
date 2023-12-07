<br>
<br>
<br>
<h1>
List of registered tickets</h1>
<?php if ($tickets): ?>
    <table class="table table-striped table-bordered table-hover" id="tbl_tickets">
     <thead>
        <tr>
          <th>ID</th>
          <th>WORTH</th>
          <th>TIME</th>
          <th>DATE</th>
          <th>SEAT</th>
          <th>DOOR</th>
          <th>CARD</th>
          <th>NAME TEAM</th>
          <th>NAME STADIUM</th>
          <th>ACCIONES</th>

        </tr>
     </thead>
     <tbody>
       <?php foreach ($tickets as $filaTemporal ): ?>
         <tr>

             <td class="text-center"> <?php echo $filaTemporal->id_ticket ?></td>
             <td> <?php echo $filaTemporal->worth_ticket ?></td>
             <td> <?php echo $filaTemporal->time_ticket ?></td>
             <td> <?php echo $filaTemporal->date_ticket?></td>
             <td> <?php echo $filaTemporal->seat_ticket ?></td>
             <td> <?php echo $filaTemporal->door_ingreso ?></td>
             <td> <?php echo $filaTemporal->card_cli ?></td>
             <td> <?php echo $filaTemporal->name_equipo ?></td>
             <td> <?php echo $filaTemporal->name_estadio ?></td>

             <td class="text-center">
               <a href="<?php echo site_url(); ?>/tickets/edit/<?php echo $filaTemporal->id_ticket; ?>" title="Editar tickets" >
                 <i class="mdi  mdi-pencil">Editar</i>
               </a>
              &nbsp;&nbsp;

                <a href="<?php echo site_url(); ?>/tickets/eliminar/<?php echo $filaTemporal->id_ticket; ?>" title="Borrar tickets" style="color:red" onclick="return confirm('Esta seguro de borra el registro?');">
                  <i class="mdi  mdi-close">Eliminar</i>
                </a>
             </td>

         </tr>

       <?php endforeach; ?>
     </tbody>
   </table>
<?php else: ?>
  <h1>No existen datos</h1>
<?php endif; ?>

<script type="text/javascript">
    $("#tbl_tickets")
    .DataTable();
</script>
