<br>
<br>
<br>
<h1>Listado de tickets registrados</h1>
<?php if ($tickets): ?>
    <table class="table table-striped table-bordered table-hover" id="tbl_tickets">
     <thead>
        <tr>
          <th>ID</th>
          <th>VALOR</th>
          <th>HORA</th>
          <th>FECHA</th>
          <th>ASIENTO</th>
          <th>PUERTAS DE INGRESO</th>
          <th>NOMBRE DE EQUIPO</th>
          <th>NOMBRE DE ESTADIO</th>
          <th>ACCIONES</th>

        </tr>
     </thead>
     <tbody>
       <?php foreach ($tickets as $filaTemporal ): ?>
         <tr>

             <td class="text-center"> <?php echo $filaTemporal->id_ticket ?></td>
             <td> <?php echo $filaTemporal->valor_ticket ?></td>
             <td> <?php echo $filaTemporal->hora_ticket ?></td>
             <td> <?php echo $filaTemporal->fecha_ticket?></td>
             <td> <?php echo $filaTemporal->asiento_ticket ?></td>
             <td> <?php echo $filaTemporal->puerta_ingreso ?></td>
             <td> <?php echo $filaTemporal->nombre_equipo ?></td>
             <td> <?php echo $filaTemporal->nombre_estadio ?></td>

             <td class="text-center">
               <a href="<?php echo site_url(); ?>/tickets/editar/<?php echo $filaTemporal->id_ticket; ?>" title="Editar tickets" >
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
  <h1>No hay datos</h1>
<?php endif; ?>

<script type="text/javascript">
    $("#tbl_tickets")
    .DataTable();
</script>
