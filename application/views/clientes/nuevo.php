<br>
<br>
<br>
<h1>Ingrese los datos del Cliente</h1>


<div class="row g-3">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form method="post" action="<?php echo site_url("/clientes/guardar"); ?>">
                              <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text"  name="nombre_cli" class="form-control" placeholder="Ingrese su nombre" id="nombre_cli">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Apellido</label>
                                    <input type="text" name="apellido_cli" placeholder="Ingrese su apellido" class="form-control" id="apellido_cli">
                                </div>
                                <div class="col-md-4">
                                        <label for="" class="form-label">Cedula</label>
                                        <input type="number" name="cedula_cli" class="form-control" placeholder="Ingrese su cedula" id="cedula_Cli">
                                    </div>
                              </div> 
                              <div class="row">
                                    
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Direccion</label>
                                        <input type="text" name="direccion_cli" class="form-control" placeholder="Ingrese su direccion" id="direccion_cli">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Correo</label>
                                        <input type="text" name="correo_cli" class="form-control" placeholder="Ingrese su correo" id="correo_cli">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Teléfono</label>
                                        <input type="number"  name="telefono_cli" class="form-control" placeholder="Ingrese su teléfono" id="telefono_cli">
                                    </div>
                              </div>
                              <div class="row">
                                <button type="submit" class="btn btn-dark m-2">Guardar</button>
                              </div>
                              
                            </form>
                        </div>
 </div>
