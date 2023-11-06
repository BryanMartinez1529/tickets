<br>
<br>
<br>
<h1>Listado de equipos registrados</h1>
<?php if ($equipos): ?>
    <table class="table table-striped table-bordered table-hover" id="tbl_equipos">
     <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>PLANTILLA</th>
          <th>ACCIONES</th>

        </tr>
     </thead>
     <tbody>
       <?php foreach ($equipos as $filaTemporal ): ?>
         <tr>

             <td class="text-center"> <?php echo $filaTemporal->id_equi ?></td>
             <td> <?php echo $filaTemporal->nombre_equi ?></td>
             <td> <?php echo $filaTemporal->plantilla_equi ?></td>

             <td class="text-center">
               <a href="<?php echo site_url(); ?>/equipos/editar/<?php echo $filaTemporal->id_equi; ?>" title="Editar equipo" >
                 <i class="mdi  mdi-pencil">Editar</i>
               </a>
              &nbsp;&nbsp;

                <a href="<?php echo site_url(); ?>/equipos/eliminar/<?php echo $filaTemporal->id_equi; ?>" title="Borrar equipo" style="color:red" onclick="return confirm('Esta seguro de borra el registro?');">
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
    $("#tbl_equipos")
    .DataTable();
</script>
