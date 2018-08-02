<?php require_once("header.php"); 
      require_once("funciones.php");

      $xid_per=leerParam("xid_per","");
      $sql="SELECT * FROM persona WHERE id_per = '$xid_per'";
      $xc= conectar();
      $res = mysqli_query($xc,$sql);
      desconectar($xc);
      $fila = mysqli_fetch_array($res);
?>

 <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Alumnos 
                                <small>Editar</small>
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="POST" action="alumnos_grabar.php">
                            <input hidden="YES" name="accion" value="editar">
                            <input hidden="YES" name="id_per" value=<?php echo $xid_per; ?>>
                            <fieldset class="form-group">
                                <label for="nom_per">Nombre: </label>
                                <input class="form-control" placeholder="Escriba su Nombre" required="required" name="nom_per" id="nom_per" value=<?php echo $fila['nom_per']; ?>>
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="ape_per">Apellido: </label>
                                <input class="form-control" placeholder="Escriba su Apellido" required="required" name="ape_per" id="ape_per" value=<?php echo $fila['ape_per']; ?>>
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="dni_per">DNI: </label>
                                <input class="form-control" placeholder="Escriba su DNI" required="required" name="dni_per" id="dni_per" maxlength="8" value=<?php echo $fila['dni_per']; ?>>
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="fec_nac_per">Fecha Nacimiento: </label>
                                <input class="form-control" type="date" required="required" name="fec_nac_per" id="fec_nac_per" value=<?php echo $fila['fec_nac_per']; ?>>
                            </fieldset>

                            <?php  
                            if ($fila["sex_per"]=="M") {
                                echo "<fieldset class='form-group'>
                                <label for='sex_per'>Sexo: </label>
                                <div class='radio'>
                                    <label>
                                        <input type='radio' name='sex_per' id='sex_per1' value='H' >Hombre
                                    </label>
                                </div>
                                <div class='radio'>
                                    <label>
                                        <input type='radio' name='sex_per' id='sex_per2' value='M' checked >Mujer
                                    </label>
                                </div>
                            </fieldset>";
                            }else{
                                echo "<fieldset class='form-group'>
                                <label for='sex_per'>Sexo: </label>
                                <div class='radio'>
                                    <label>
                                        <input type='radio' name='sex_per' id='sex_per1' value='H' checked>Hombre
                                    </label>
                                </div>
                                <div class='radio'>
                                    <label>
                                        <input type='radio' name='sex_per' id='sex_per2' value='M' >Mujer
                                    </label>
                                </div>
                            </fieldset>";
                            }
                            ?>

                            <fieldset class="form-group">
                                <label for="email_per">Correo Electronico: </label>
                                <input  type="email" class="form-control" placeholder="Escriba su Correo Electronico" required="required" name="email_per" id="email_per" maxlength="50" value=<?php echo $fila['email_per']; ?>>
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="cel_per">Celular: </label>
                                <input class="form-control" placeholder="Escriba su celular" required="required" name="cel_per" id="cel_per" value=<?php echo $fila['cel_per']; ?>>
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="dir_per">Direccion: </label>
                                <input class="form-control" placeholder="Escriba su direccion" required="required" name="dir_per" id="dir_per" value="<?php echo $fila['dir_per']; ?>">
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="log_per">Usuario: </label>
                                <input class="form-control" placeholder="Cree un usuario para acceder al sistema" required="required" name="log_per" id="log_per" maxlength="100" value=<?php echo $fila['log_per']; ?>>
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="pass_per">Contraseña: </label>
                                <input class="form-control" placeholder="Cree una contraseña"  name="pass_per" id="pass_per" maxlength="45" value=<?php echo $fila['pass_per']; ?>>
                            </fieldset>

                            <button type="submit" class="btn btn-secondary">Guardar Button</button>
                        </form>
                    </div>      
                </div>
                <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

<?php require_once("footer.php"); ?>