<?php  
   $totalTickets=0; 
   
    if ($tickets) {
        $totalTickets=sizeof($tickets);
    }

?>

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
          <th>PRICE</th>
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
               <a href="<?php echo site_url(); ?>/tickets/edit/<?php echo $filaTemporal->id_ticket; ?>" title="Edit tickets" >
                 <i class="mdi  mdi-pencil">Edit</i>
               </a>
              &nbsp;&nbsp;

                <a href="<?php echo site_url(); ?>/tickets/eliminar/<?php echo $filaTemporal->id_ticket; ?>" title="Delete tickets" style="color:red" onclick="return confirm('Are you sure to delete this record?');">
                  <i class="mdi  mdi-close">Delete</i>
                </a>
             </td>

         </tr>

       <?php endforeach; ?>
     </tbody>
   </table>
<?php else: ?>
  <h1>There is no data</h1>
<?php endif; ?>

<br>
<div class="row">
  <div class="col-md-5">
  <div class="card" style="width: 18rem; background-color:black" >              
      <div class="card-body">
           <h5 class="card-title">Total Tickets</h5>
           <?php echo $totalTickets; ?>                                     
      </div>
  </div>
  <br>
  <div class="card" style="width: 18rem; background-color:black" >              
      <div class="card-body">
           <h5 class="card-title">Total Money</h5>
           $<?php echo $totalMoney; ?>                                     
      </div>
  </div>
  </div>
</div>

<script type="text/javascript">
    $("#tbl_customers")
    .DataTable();
</script>



<script type="text/javascript">
    $("#tbl_tickets")
    .DataTable();
</script>
