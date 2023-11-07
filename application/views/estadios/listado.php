<br>
<br>
<br>
<h1>Listado de estadios registrados</h1>
<?php if ($estadios): ?>
    <table class="table table-striped table-bordered table-hover" id="tbl_estadios">
     <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE ESTADIO</th>
          <th>DIRECCION DEL ESTADIO</th>
          <th>CAPACIDAD ESTADIO</th>
          <th>lOCALIDAD ESTADIO </th>
          <th>PUERTAS DE INGRESO DEL ESTADIO</th>
          <th>ACCIONES</th>

        </tr>
     </thead>
     <tbody>
       <?php foreach ($estadios as $filaTemporal ): ?>
         <tr>

             <td class="text-center"> <?php echo $filaTemporal->id_est ?></td>
             <td> <?php echo $filaTemporal->nombre_est ?></td>
             <td> <?php echo $filaTemporal->direccion_est ?></td>
             <td> <?php echo $filaTemporal->capacidad_est?></td>
             <td> <?php echo $filaTemporal->localidad_est ?></td>
             <td> <?php echo $filaTemporal->puertas_ingreso_est?></td>

             <td class="text-center">
               <a href="<?php echo site_url(); ?>/estadios/editar/<?php echo $filaTemporal->id_est; ?>" title="Editar estadios" >
                 <i class="mdi  mdi-pencil">Editar</i>
               </a>
              &nbsp;&nbsp;

                <a href="<?php echo site_url(); ?>/estadios/eliminar/<?php echo $filaTemporal->id_est; ?>" title="Borrar estadios" style="color:red" onclick="return confirm('Esta seguro de borra el registro?');">
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
    $("#tbl_estadios")
    .DataTable();
</script>
