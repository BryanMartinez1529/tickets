<br>
<br>
<br>
<h1>List of registered clients</h1>
<?php if ($customers): ?>
    <table class="table table-striped table-bordered table-hover" id="tbl_customers">
     <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>LASTNAME</th>
          <th>CARD</th>
          <th>DIRECCTION</th>
          <th>MAIL</th>
          <th>PHONE</th>
          <th>ACCIONES</th>

        </tr>
     </thead>
     <tbody>
       <?php foreach ($customers as $filaTemporal ): ?>
         <tr>

             <td class="text-center"> <?php echo $filaTemporal->id_cli ?></td>
             <td> <?php echo $filaTemporal->name_cli ?></td>
             <td> <?php echo $filaTemporal->lastname_cli ?></td>
             <td> <?php echo $filaTemporal->card_cli?></td>
             <td> <?php echo $filaTemporal->direction_cli ?></td>
             <td> <?php echo $filaTemporal->mail_cli?></td>
             <td> <?php echo $filaTemporal->phone_cli ?></td>
             <td class="text-center">
               <a href="<?php echo site_url(); ?>/customers/edit/<?php echo $filaTemporal->id_cli; ?>" title="Edit client" >
                 <i class="mdi  mdi-pencil">Editar</i>
               </a>
              &nbsp;&nbsp;

                <a href="<?php echo site_url(); ?>/customers/eliminar/<?php echo $filaTemporal->id_cli; ?>" title="Delete client" style="color:red" onclick="return confirm('Esta seguro de borra el registro?');">
                  <i class="mdi  mdi-close">Eliminar</i>
                </a>
             </td>

         </tr>

       <?php endforeach; ?>
     </tbody>
   </table>
<?php else: ?>
  <h1>No hay datos que mostrar</h1>
<?php endif; ?>

<script type="text/javascript">
    $("#tbl_customers")
    .DataTable();
</script>
