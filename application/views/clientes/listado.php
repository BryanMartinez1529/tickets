<br>
<br>
<br>
<h1>Listado de clientes registrados</h1>
<?php if ($clientes): ?>
    <table class="table table-striped table-bordered table-hover" id="tbl_clientes">
     <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>APELLIDO</th>
          <th>CEDULA</th>
          <th>DIRECCION</th>
          <th>CORREO</th>
          <th>TELEFONO</th>
          <th>ACCIONES</th>

        </tr>
     </thead>
     <tbody>
       <?php foreach ($clientes as $filaTemporal ): ?>
         <tr>

             <td class="text-center"> <?php echo $filaTemporal->id_cli ?></td>
             <td> <?php echo $filaTemporal->nombre_cli ?></td>
             <td> <?php echo $filaTemporal->apellido_cli ?></td>
             <td> <?php echo $filaTemporal->cedula_cli?></td>
             <td> <?php echo $filaTemporal->direccion_cli ?></td>
             <td> <?php echo $filaTemporal->correo_cli?></td>
             <td> <?php echo $filaTemporal->telefono_cli ?></td>
             <td class="text-center">
               <a href="<?php echo site_url(); ?>/clientes/editar/<?php echo $filaTemporal->id_cli; ?>" title="Editar cliente" >
                 <i class="mdi  mdi-pencil">Editar</i>
               </a>
              &nbsp;&nbsp;

                <a href="<?php echo site_url(); ?>/clientes/eliminar/<?php echo $filaTemporal->id_cli; ?>" title="Borrar cliente" style="color:red" onclick="return confirm('Esta seguro de borra el registro?');">
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
    $("#tbl_clientes")
    .DataTable();
</script>