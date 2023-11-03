<br>
<br>
<br>
<h1>Editar los datos del Cliente</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Formulario</h6>
                            <form method="post" action="<?php echo site_url("/clientes/procesoActualizar"); ?>">
                              <input type="hidden" name="id_cli" id="id_cli" value="<?php echo $editarCliente->id_cli ?>" >
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text"  name="nombre_cli" class="form-control"  id="nombre_cli" value="<?php echo $editarCliente->nombre_cli ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" name="apellido_cli" class="form-control" id="apellido_cli" value="<?php echo $editarCliente->apellido_cli ?>">
                                </div>
                                <div class="col-md-4">
                                        <label for="" class="form-label">Cedula</label>
                                        <input type="number" name="cedula_cli" class="form-control"  id="cedula_cli" value="<?php echo $editarCliente->cedula_cli ?>">
                                    </div>
                              </div> 
                              <div class="row">
                                    
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Direccion</label>
                                        <input type="text" name="direccion_cli" class="form-control"  id="direccion_cli" value="<?php echo $editarCliente->direccion_cli ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Correo</label>
                                        <input type="text" name="correo_cli" class="form-control"  id="correo_cli" value="<?php echo $editarCliente->correo_cli ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Teléfono</label>
                                        <input type="number"  name="telefono_cli" class="form-control"  id="telefono_cli" value="<?php echo $editarCliente->telefono_cli ?>">
                                    </div>
                              </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>
                              
                            </form>
                        </div>
 </div>
